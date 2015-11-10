<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BitacoraCambiosForm
 *
 * @author Kenny Cornejo
 */
class BitacoraCambiosForm extends sfForm {

    public function configure() {
        $this->setWidget('Fecha_Inicio', new sfWidgetFormInputText(array(), array(
            'class' => 'datemask',
        )));
        $this->setWidget('Fecha_Fin', new sfWidgetFormInputText(array(), array(
            'class' => 'datemask',
        )));
        $this->setValidator('Fecha_Inicio', new sfValidatorString(array('required' => true)));
        $this->setValidator('Fecha_Fin', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('bitacora_cambios[%s]');
    }

}

?>
