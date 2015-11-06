<?php

/**
 * Proveedor form base class.
 *
 * @method Proveedor getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseProveedorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'nombre'            => new sfWidgetFormInputText(),
      'direccion'         => new sfWidgetFormInputText(),
      'correoElectronico' => new sfWidgetFormInputText(),
      'nombreContacto'    => new sfWidgetFormInputText(),
      'telefono'          => new sfWidgetFormInputText(),
      'ciudad'            => new sfWidgetFormInputText(),
      'observacion'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre'            => new sfValidatorString(array('max_length' => 70)),
      'direccion'         => new sfValidatorString(array('max_length' => 70)),
      'correoElectronico' => new sfValidatorString(array('max_length' => 70)),
      'nombreContacto'    => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'telefono'          => new sfValidatorString(array('max_length' => 30)),
      'ciudad'            => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'observacion'       => new sfValidatorString(array('max_length' => 70, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('proveedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proveedor';
  }


}
