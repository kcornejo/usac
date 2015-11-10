<?php

/**
 * TipoProducto form base class.
 *
 * @method TipoProducto getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseTipoProductoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 255)),
      'descripcion' => new sfValidatorString(array('max_length' => 120, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_producto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoProducto';
  }


}
