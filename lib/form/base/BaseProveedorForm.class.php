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
      'correo_eletronico' => new sfWidgetFormInputText(),
      'nombre_contacto'   => new sfWidgetFormInputText(),
      'telefono'          => new sfWidgetFormInputText(),
      'ciudad'            => new sfWidgetFormInputText(),
      'observacion'       => new sfWidgetFormInputText(),
      'nit'               => new sfWidgetFormInputText(),
      'razon_social'      => new sfWidgetFormInputText(),
      'contacto'          => new sfWidgetFormInputText(),
      'referencia'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre'            => new sfValidatorString(array('max_length' => 255)),
      'direccion'         => new sfValidatorString(array('max_length' => 70)),
      'correo_eletronico' => new sfValidatorString(array('max_length' => 70)),
      'nombre_contacto'   => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'telefono'          => new sfValidatorString(array('max_length' => 30)),
      'ciudad'            => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'observacion'       => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'nit'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'razon_social'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'contacto'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'referencia'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
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
