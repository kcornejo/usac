<?php

class NicknameForm extends sfForm {

    public function configure() {
        $this->setWidget('Nickname', new sfWidgetFormInputText(array(), array('class' => 'form-control')));
        $this->setValidator('Nickname', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('nickname[%s]');
    }

}