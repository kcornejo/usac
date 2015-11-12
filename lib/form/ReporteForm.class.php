<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReporteForm
 *
 * @author Kenny Cornejo
 */
class ReporteForm extends sfForm {

    public function configure() {
        $listado = array();
        $listado['0'] = 'Estado Actual de Producto';
        $listado['1'] = 'Productos por Debajo de Minimo';
        $listado['2'] = '5 Clientes con mas Compras';
        $listado['3'] = '5 Proveedores con mas ventas';
        $listado['4'] = '5 Productos mas vendidos';
        $listado['5'] = '5 Productos menos vendidos';
        $listado['6'] = 'Empleado con mas Ventas';
        $listado['7'] = 'Ventas por Empleado';
        $listado['8'] = 'Reporte por Criterios';
        $listado['9'] = 'Pedidos en Transito';
        $this->setWidget('Tipo', new sfWidgetFormChoice(array('choices' => $listado), array('class' => 'form-control')));
        $this->setWidget('Inicio', new sfWidgetFormInputText(array(), array('class' => 'datemask form-control input-medium')));
        $this->setWidget('Fin', new sfWidgetFormInputText(array(), array('class' => 'datemask form-control input-medium')));
        $this->setValidator('Tipo', new sfValidatorString(array('required' => true)));
        $this->setValidator('Inicio', new sfValidatorString(array('required' => true)));
        $this->setValidator('Fin', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('reporte[%s]');
        //datemask
    }

}

?>
