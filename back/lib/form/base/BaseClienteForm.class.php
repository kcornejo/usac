<?php

/**
 * Cliente form base class.
 *
 * @method Cliente getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseClienteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'correo'      => new sfWidgetFormInputText(),
      'direccion'   => new sfWidgetFormInputText(),
      'telefono'    => new sfWidgetFormInputText(),
      'ciudad'      => new sfWidgetFormInputText(),
      'observacion' => new sfWidgetFormInputText(),
      'puntos'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 255)),
      'correo'      => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'direccion'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'telefono'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'ciudad'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'observacion' => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'puntos'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }


}
