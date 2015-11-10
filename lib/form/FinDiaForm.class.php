<?php

class FinDiaForm extends sfForm {

    public function configure() {
        $this->setWidget('Fecha', new sfWidgetFormInputText(array(), array('class' => 'datemask form-control input-medium')));
        $this->setValidator('Fecha', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('fin_dia[%s]');
    }

}

?>
