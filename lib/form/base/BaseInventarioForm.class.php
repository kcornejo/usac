<?php

/**
 * Inventario form base class.
 *
 * @method Inventario getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseInventarioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'producto_id'   => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'cantidad'      => new sfWidgetFormInputText(),
      'precio_compra' => new sfWidgetFormInputText(),
      'proveedor_id'  => new sfWidgetFormPropelChoice(array('model' => 'Proveedor', 'add_empty' => true)),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'created_by'    => new sfWidgetFormInputText(),
      'updated_by'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'producto_id'   => new sfValidatorPropelChoice(array('model' => 'Producto', 'column' => 'id', 'required' => false)),
      'cantidad'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'precio_compra' => new sfValidatorNumber(array('required' => false)),
      'proveedor_id'  => new sfValidatorPropelChoice(array('model' => 'Proveedor', 'column' => 'id', 'required' => false)),
      'created_at'    => new sfValidatorDateTime(array('required' => false)),
      'updated_at'    => new sfValidatorDateTime(array('required' => false)),
      'created_by'    => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'updated_by'    => new sfValidatorString(array('max_length' => 32, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('inventario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Inventario';
  }


}
