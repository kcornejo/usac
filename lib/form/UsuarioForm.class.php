<?php

/**
 * Usuario form.
 *
 * @package    plan
 * @subpackage form
 * @author     via
 */
class UsuarioForm extends BaseUsuarioForm {

    public function configure() {
        $this->setWidget('clave', new sfWidgetFormInputPassword(array(), array('class' => 'form-control input-medium')));
    }

}
