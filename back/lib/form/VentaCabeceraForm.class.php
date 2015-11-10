<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VentaCabeceraForm
 *
 * @author Kenny Cornejo
 */
class VentaCabeceraForm extends sfForm {

    public function configure() {
        $this->setWidget('Cliente', new sfWidgetFormPropelChoice(array('model' => 'Cliente'), array('class' => 'form-control input-medium')));
        $this->setWidget('TipoPago', new sfWidgetFormPropelChoice(array('model' => 'TipoPago', 'label' => 'Tipo de Pago'), array('class' => 'form-control input-medium')));
        $this->setValidator('Cliente', new sfValidatorString(array('required' => true)));
        $this->setValidator('TipoPago', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('venta_cabecera[%s]');
    }

}

?>
