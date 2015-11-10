<?php

class AccesoForm extends sfForm {

    public function configure() {
        $this->setWidget('Menu', new sfWidgetFormPropelChoice(array('model' => 'Menu', 'expanded' => true, 'multiple' => true)));
        $this->setValidator('Menu', new sfValidatorPropelChoice(array('model' => 'Menu', 'multiple' => true, 'required' => false)));
        $this->widgetSchema->setNameFormat('acceso[%s]');
    }

}