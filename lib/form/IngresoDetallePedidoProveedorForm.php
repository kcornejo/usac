<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IngresoInventarioForm
 *
 * @author Kenny Cornejo
 */
class IngresoDetallePedidoProveedorForm extends sfForm {

    public function configure() {
        
        $this->setWidget('Producto', new sfWidgetFormPropelChoice(array('model' => 'Producto'), array('class' => 'form-control')));
        $this->setWidget('Cantidad', new sfWidgetFormInputText(array('label' => 'Unidades'), array('class' => 'form-control input-medium')));
        $this->setWidget('Precio', new sfWidgetFormInputText(array('label' => 'Precio'), array('class' => 'form-control input-medium')));
        $this->setValidator('Producto', new sfValidatorString(array('required' => true)));
        $this->setValidator('Cantidad', new sfValidatorInteger(array('required' => false)));
        $this->setValidator('Precio', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('ingreso_detpedprov[%s]');
    }

}

?>
