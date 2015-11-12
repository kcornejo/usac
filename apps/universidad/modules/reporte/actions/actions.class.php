<?php

/**
 * reporte actions.
 *
 * @package    universidad
 * @subpackage reporte
 * @author     Univ
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reporteActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $defaults = array('Inicio' => date('d/m/Y'), 'Fin' => date('d/m/Y'));
        $this->form = new ReporteForm($defaults);
        $html = '';
        $datos = array();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('reporte'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $inicio = $valores['Inicio'];
                $inicio = explode('/', $inicio);
                $inicio = $inicio[2] . '-' . $inicio[1] . '-' . $inicio[0];
                $fin = $valores['Fin'];
                $fin = explode('/', $fin);
                $fin = $fin[2] . '-' . $fin[1] . '-' . $fin[0];
                switch ($valores['Tipo']) {
                    case '0':
                        $string = 'Estado Actual de Producto';
                        $datos = ProductoQuery::create()->find();
                        $html = $this->getPartial('reporte/reporteCero', array('datos' => $datos));
                        break;
                    case '1':
                        $string = 'Productos por Debajo de Minimo';
                        $productos = ProductoQuery::create()->find();
                        $datos = new PropelArrayCollection();
                        foreach ($productos as $fila) {
                            if ($fila->getCantidadMinima() >= Producto::obtenerExistencia($fila->getId())) {
                                $datos[] = $fila;
                            }
                        }
                        $html = $this->getPartial('reporte/reporteUno', array('datos' => $datos));
                        break;
                    case '2':
                        $string = '5 Maximos Clientes';
                        $listadoUno = array();
                        $listadoDos = array();
                        $listadoTres = array();
                        $MasCompras = FacturaDetalleQuery::create()
                                ->useFacturaQuery()
                                ->where("created_at <= '$fin 23:59:59' and created_at >= '$inicio 00:00:00'")
                                ->groupByClienteId()
                                ->endUse()
                                ->withColumn('Count(*)', 'Contador')
                                ->orderBy('Contador', 'Desc')
                                ->limit(5)
                                ->find();
                        foreach ($MasCompras as $mc) {
                            if ($mc->getFactura()) {
                                $Cliente = ClienteQuery::create()->findOneById($mc->getFactura()->getClienteId());
                                $fila = array();
                                $fila['Maximo'] = $mc->getContador();
                                $fila['Cliente'] = $Cliente->getNombre();
                                $listadoUno[] = $fila;
                            }
                        }
                        //
                        $masFacturas = FacturaQuery::create()
                                ->where("created_at <= '$fin 23:59:59' and created_at >= '$inicio 00:00:00'")
                                ->groupByClienteId()
                                ->withColumn('Count(*)', 'Contador')
                                ->orderBy('Contador', 'Desc')
                                ->limit(5)
                                ->find();
                        foreach ($masFacturas as $mc) {
                            $fila = array();
                            $fila['Maximo'] = $mc->getContador();
                            $fila['Cliente'] = $mc->getCliente()->getNombre();
                            $listadoDos[] = $fila;
                        }
                        //
                        $monto = FacturaDetalleQuery::create()
                                ->withColumn('SUM(cantidad * precio_unitario)', 'Total')
                                ->useFacturaQuery()
                                ->groupByClienteId()
                                ->where("created_at <= '$fin 23:59:59' and created_at >= '$inicio 00:00:00'")
                                ->endUse()
                                ->orderBy('Total', 'Desc')
                                ->limit(5)
                                ->find();
                        foreach ($monto as $mc) {
                            $fila = array();
                            $Cliente = ClienteQuery::create()->findOneById($mc->getFactura()->getClienteId());
                            $fila['Monto'] = $mc->getTotal();
                            $fila['Cliente'] = $Cliente->getNombre();
                            $listadoTres[] = $fila;
                        }
                        $datos['listadoUno'] = $listadoUno;
                        $datos['listadoDos'] = $listadoDos;
                        $datos['listadoTres'] = $listadoTres;
                        $html = $this->getPartial('reporte/reporteDos', array('listadoUno' => $listadoUno, 'listadoDos' => $listadoDos, 'listadoTres' => $listadoTres));
                        break;
                    case '3':
                        $Proveedores = MovimientoQuery::create()
                                ->where("fecha <= '$fin' and fecha >= '$inicio'")
                                ->filterByTipoMovimiento('+')
                                ->groupByProveedorId()
                                ->withColumn('count(id)', 'Total')
                                ->orderBy('Total')
                                ->limit(5)
                                ->find();
                        $string = 'Reporte de Proveedores';
                        $html = $this->getPartial('reporte/reporteTres', array('datos' => $Proveedores));
                        break;
                    case '4':
                        $movimientos = MovimientoQuery::create()
                                ->where("fecha <= '$fin' and fecha >= '$inicio'")
                                ->filterByTipoMovimiento('-')
                                ->groupByProductoId()
                                ->withColumn('count(cantidad)', 'Total')
                                ->orderBy('Total')
                                ->limit(5)
                                ->find();
                        $string = 'Reporte de Productos mas Vendidos';
                        $html = $this->getPartial('reporte/reporteCuatro', array('datos' => $movimientos));
                        break;
                    case '5':
                        $movimientos = MovimientoQuery::create()
                                ->where("fecha <= '$fin' and fecha >= '$inicio'")
                                ->filterByTipoMovimiento('-')
                                ->groupByProductoId()
                                ->withColumn('count(cantidad)', 'Total')
                                ->orderBy('Total', 'desc')
                                ->limit(5)
                                ->find();
                        $string = 'Reporte de Productos menos Vendidos';
                        $html = $this->getPartial('reporte/reporteCinco', array('datos' => $movimientos));
                        break;
                    case '6':
                        $Facturas = FacturaQuery::create()
                                ->where("created_at <= '$fin 23:59:59' and created_at >= '$inicio 00:00:00'")
                                ->groupByCreatedBy()
                                ->withColumn('count(id)', 'Suma')
                                ->orderBy('Suma')
                                ->limit(1)
                                ->find();
                        $string = 'Empleado con mas Venta';
                        $html = $this->getPartial('reporte/reporteSeis', array('datos' => $Facturas));
                        break;
                    case '7':
                        $Facturas = FacturaQuery::create()
                                ->where("created_at <= '$fin 23:59:59' and created_at >= '$inicio 00:00:00'")
                                ->groupByCreatedBy()
                                ->withColumn('count(id)', 'Suma')
                                ->orderBy('Suma')
                                ->find();
                        $string = 'Empleados con mas Ventas';
                        $html = $this->getPartial('reporte/reporteSeis', array('datos' => $Facturas));
                        break;
                    case '8':
                        $Producto = MovimientoQuery::create()
                                ->where("fecha <= '$fin' and fecha >= '$inicio'")
                                ->groupByProductoId()
                                ->withColumn('count(id)', 'Suma')
                                ->find();
                        $Marca = MovimientoQuery::create()
                                ->joinWith('Producto')
                                ->joinWith('Producto.Marca')
                                ->where("movimiento.fecha <= '$fin' and movimiento.fecha >= '$inicio'")
                                ->withColumn('count(marca.id)', 'Suma')
                                ->find();
                        $tipo = MovimientoQuery::create()
                                ->joinWith('Producto')
                                ->joinWith('Producto.TipoProducto')
                                ->where("movimiento.fecha <= '$fin' and movimiento.fecha >= '$inicio'")
                                ->withColumn('count(TipoProducto.id)', 'Suma')
                                ->find();
                        $presentacion = MovimientoQuery::create()
                                ->joinWith('Producto')
                                ->joinWith('Producto.TipoPresentacion')
                                ->where("movimiento.fecha <= '$fin' and movimiento.fecha >= '$inicio'")
                                ->withColumn('count(TipoPresentacion.id)', 'Suma')
                                ->find();
                        $string = 'Resumen de Ventas';
                        $html = $this->getPartial('reporte/reporteOcho', array('productos' => $Producto, 'marcas' => $Marca, 'tipos' => $tipo, 'presentacion' => $presentacion));
                        break;
                    case '9':
                        $Pedido = PedidoProveedorQuery::create()
                            ->where("estado <> 'Entregado' ")
                            ->find();
                        $string = 'Pedidos en Transito';
                        $html = $this->getPartial('reporte/reporteNueve', array('datos' => $Pedido));
                        break;
                }
                if ($request->hasParameter('pdf')) {
                    $htmlBase = '<img src="/vendor/dist/img/logo_farmacia.png" style="width:150px"/><br/><h3>' . $string . '</h3><br/>';
                    $html = $htmlBase . $html;
                    $pdf = new TCPDF("P", "mm", "Letter");
                    $pdf->SetCreator(PDF_CREATOR);
                    $pdf->SetAuthor('SALUD_INTEGRAL');
                    $pdf->SetTitle('Reporte');
                    $pdf->SetSubject('Reporte');
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
                    $pdf->writeHTML($html);

                    $pdf->Output('Reporte.pdf', 'D');

                    die();
                }
            }
        }
        $this->html = $html;
    }

}
