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
        if ($request->hasParameter('pdf')) {
            $html = '<img src="/vendor/dist/img/logo_farmacia.png" style="width:150px"/><br/><h3>' . sfContext::getInstance()->getUser()->getAttribute('html', null, 'string') . '</h3><br/>';
            $html .= sfContext::getInstance()->getUser()->getAttribute('html', null, 'reporte');
            $pdf = new sfTCPDF("P", "mm", "Letter");
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
            print_r($html);die();
            $pdf->writeHTML($html);
            
            $pdf->Output('Reporte.pdf', 'I');

            die();
        }
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
                        if (!$request->hasParameter('pdf')) {
                            $datos = ProductoQuery::create()->find();
                        }
                        $html = $this->getPartial('reporte/reporteCero', array('datos' => $datos));
                        break;
                    case '1':
                        $string = 'Productos por Debajo de Minimo';
                        if (!$request->hasParameter('pdf')) {
                            $productos = ProductoQuery::create()->find();
                            $datos = new PropelArrayCollection();
                            foreach ($productos as $fila) {
                                if ($fila->getCantidadMinima() >= Producto::obtenerExistencia($fila->getId())) {
                                    $datos[] = $fila;
                                }
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
                        $html = $this->getPartial('reporte/reporteDosUno', array('listadoUno' => $listadoUno));
                        $html .= $this->getPartial('reporte/reporteDosDos', array('listadoDos' => $listadoDos));
                        $html .= $this->getPartial('reporte/reporteDosTres', array('listadoTres' => $listadoTres));
                        break;
                }
                sfContext::getInstance()->getUser()->setAttribute('html', $html, 'reporte');
                sfContext::getInstance()->getUser()->setAttribute('html', $string, 'string');
            }
        }
        $this->html = $html;
    }

}
