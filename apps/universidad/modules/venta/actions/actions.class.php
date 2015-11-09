<?php

/**
 * venta actions.
 *
 * @package    universidad
 * @subpackage venta
 * @author     Univ
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ventaActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->form = new VentaCabeceraForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('venta_cabecera'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $Factura = new Factura();
                $Factura->setClienteId($valores['Cliente']);
                $Factura->setTipoPagoId($valores['TipoPago']);
                $Factura->save();
                $this->redirect('venta/detalle?id=' . $Factura->getId());
            }
        }
    }

    public function executeDetalle(sfWebRequest $request) {
        $Factura = FacturaQuery::create()->findOneById($request->getParameter('id'));
        if (!$Factura->getActivo()) {
            $this->getUser()->setFlash('error', 'Factura cerrada');
            $this->redirect('inicio/index');
        }
        $this->form = new VentaDetalleForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('venta_detalle'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $FacturaDetalle = FacturaDetalleQuery::create()
                        ->filterByProductoId($valores['Producto'])
                        ->filterByFacturaId($request->getParameter('id'))
                        ->findOne();
                $Factura = FacturaQuery::create()->findOneById($request->getParameter('id'));
                $cantidad = 0;
                $Producto = InventarioQuery::create()
                        ->filterByProductoId($valores['Producto'])
                        ->findOne();
                if ($FacturaDetalle) {
                    $FacturaDetalle->setCantidad($valores['Cantidad'] + $FacturaDetalle->getCantidad());
                    $cantidad = $valores['Cantidad'];
                } else {
                    $FacturaDetalle = new FacturaDetalle();
                    $FacturaDetalle->setProveedorId($Producto->getProveedorId());
                    $FacturaDetalle->setFacturaId($request->getParameter('id'));
                    $FacturaDetalle->setProductoId($valores['Producto']);
                    $FacturaDetalle->setCantidad($valores['Cantidad']);
                    $cantidad = $valores['Cantidad'];
                    $FacturaDetalle->setPrecioUnitario($Producto->getPrecioCompra() * 1.2);
                }
                if ($cantidad <= $Producto->getCantidad()) {
                    $Producto->setCantidad($Producto->getCantidad() - $cantidad);
                    $Producto->save();
                    $FacturaDetalle->save();
                } else {
                    $this->getUser()->setFlash('error', 'Cantidad solicitada supera a la cantidad en existencia');
                }
                $this->redirect('venta/detalle?id=' . $request->getParameter('id'));
            }
        }
        $this->id = $request->getParameter('id');
        $this->detalles = FacturaDetalleQuery::create()->findByFacturaId($this->id);
        $this->factura = FacturaQuery::create()->findOneById($this->id);
    }

    public function executeEliminarDetalle(sfWebRequest $request) {
        $Factura = FacturaQuery::create()->findOneById($request->getParameter('factura_id'));
        if (!$Factura->getActivo()) {
            $this->getUser()->setFlash('error', 'Factura cerrada');
            $this->redirect('inicio/index');
        }
        $id = $request->getParameter('id');
        $factura_id = $request->getParameter('factura_id');
        $Detalle = FacturaDetalleQuery::create()->findOneById($id);
        $Inventario = InventarioQuery::create()
                ->filterByProductoId($Detalle->getProductoId())
                ->filterByProveedorId($Detalle->getProveedorId())
                ->findOne();
        $Inventario->setCantidad($Inventario->getCantidad() + $Detalle->getCantidad());
        $Inventario->save();
        $Detalle->delete();
        $this->redirect('venta/detalle?id=' . $factura_id);
    }

    public function executeEliminar(sfWebRequest $request) {
        $Factura = FacturaQuery::create()->findOneById($request->getParameter('id'));
        if (!$Factura->getActivo()) {
            $this->getUser()->setFlash('error', 'Factura cerrada');
            $this->redirect('inicio/index');
        }
        $id = $request->getParameter('id');

        $Detalles = FacturaDetalleQuery::create()->findByFacturaId($id);
        foreach ($Detalles as $detalle) {
            $Inventario = InventarioQuery::create()
                    ->filterByProductoId($detalle->getProductoId())
                    ->filterByProveedorId($detalle->getProveedor())
                    ->findOne();
            $Inventario->setCantidad($Inventario->getCantidad() + $detalle->getCantidad());
            $Inventario->save();
        }
        $Detalles->delete();
        FacturaQuery::create()->findOneById($id)->delete();
        $this->redirect('inicio/index');
    }

    public function executeConfirmar(sfWebRequest $request) {
        $Factura = FacturaQuery::create()->findOneById($request->getParameter('id'));
        if ($Factura->getActivo()) {
            $BitacoraCambios = new BitacoraCambios();
            $BitacoraCambios->setModelo('Factura');
            $BitacoraCambios->setIp(sfContext::getInstance()->getRequest()->getRemoteAddress());
            $BitacoraCambios->setDescripcion('Creacion de Factura con id: ' . sprintf("%05d", $Factura->getId()));
            $Usuario = UsuarioQuery::create()->findOneById(sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad'));
            if ($Usuario) {
                $BitacoraCambios->setCreatedBy($Usuario->getUsuario());
            }
            $BitacoraCambios->save();
            $Cliente = ClienteQuery::create()->findOneById($Factura->getClienteId());
            if (Factura::obtenerTotal($request->getParameter('id')) >= 200) {
                $Cliente->setPuntos($Cliente->getPuntos() + 10);
                $Cliente->save();
            }
        }
        $Factura->setActivo(false);
        $Factura->save();
        $pdf = new sfTCPDF("P", "mm", "Letter");
        $this->id = $request->getParameter("id");
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('SALUD_INTEGRAL');
        $pdf->SetTitle('Factura');
        $pdf->SetSubject('Factura');
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
        $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetHeaderMargin(0.1);
        $pdf->SetFooterMargin(0.1);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetFont('dejavusans', '', 7);


        $pdf->AddPage();
        $html = '';
        $detalles = FacturaDetalleQuery::create()->findByFacturaId($Factura->getId());
        $html = $this->getPartial('venta/soporteTabla', array("factura" => $Factura, "detalles" => $detalles));
        $pdf->writeHTML($html);
        $pdf->Output('Factura.pdf', 'D');
    }

}
