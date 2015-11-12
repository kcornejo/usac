<?php

/**
 * Movimiento form base class.
 *
 * @method Movimiento getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseMovimientoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'proveedor_id'    => new sfWidgetFormPropelChoice(array('model' => 'Proveedor', 'add_empty' => true)),
      'cliente_id'      => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => true)),
      'tipo_movimiento' => new sfWidgetFormInputText(),
      'producto_id'     => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'cantidad'        => new sfWidgetFormInputText(),
      'fecha'           => new sfWidgetFormInputText(),
      'precio'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'proveedor_id'    => new sfValidatorPropelChoice(array('model' => 'Proveedor', 'column' => 'id', 'required' => false)),
      'cliente_id'      => new sfValidatorPropelChoice(array('model' => 'Cliente', 'column' => 'id', 'required' => false)),
      'tipo_movimiento' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'producto_id'     => new sfValidatorPropelChoice(array('model' => 'Producto', 'column' => 'id', 'required' => false)),
      'cantidad'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'fecha'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'precio'          => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('movimiento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Movimiento';
  }


}
