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
class IngresoPedidoProveedorForm extends sfForm {

    public function configure() {
        $estados = array(
            'Solicitado' => 'Solicitado',
            'Confirmado' => 'Confirmado',
            'Entregado' => 'Entregado'
        );
        $this->setWidget('Proveedor', new sfWidgetFormPropelChoice(array('model' => 'Proveedor'), array('class' => 'form-control')));
        $this->setWidget('Descripcion', new sfWidgetFormInputText(array('label' => 'Descripcion de pedido'), array('class' => 'form-control input-medium')));
        $this->setWidget('Estado', new sfWidgetFormChoice(array(
            'choices' => $estados,
            'expanded' => false,
                ), array('class' => 'form-control input-medium')));
        $this->setValidator('Proveedor', new sfValidatorString(array('required' => true)));
        $this->setValidator('Descripcion', new sfValidatorString(array('required' => false)));
        $this->setValidator('Estado', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('ingreso_pedprov[%s]');
    }

}

?>
