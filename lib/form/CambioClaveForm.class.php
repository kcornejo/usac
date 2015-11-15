<?php

class CambioClaveForm extends sfForm {

    public function configure() {
        $this->setWidget('clave', new sfWidgetFormInputPassword(array(), array('class' => 'form-control input-medium')));
        $this->setValidator('clave', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('cambio_clave[%s]');
    }

}