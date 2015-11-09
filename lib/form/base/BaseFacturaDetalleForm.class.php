<?php

/**
 * FacturaDetalle form base class.
 *
 * @method FacturaDetalle getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseFacturaDetalleForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'factura_id'      => new sfWidgetFormPropelChoice(array('model' => 'Factura', 'add_empty' => true)),
      'producto_id'     => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'proveedor_id'    => new sfWidgetFormPropelChoice(array('model' => 'Proveedor', 'add_empty' => true)),
      'cantidad'        => new sfWidgetFormInputText(),
      'precio_unitario' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'factura_id'      => new sfValidatorPropelChoice(array('model' => 'Factura', 'column' => 'id', 'required' => false)),
      'producto_id'     => new sfValidatorPropelChoice(array('model' => 'Producto', 'column' => 'id', 'required' => false)),
      'proveedor_id'    => new sfValidatorPropelChoice(array('model' => 'Proveedor', 'column' => 'id', 'required' => false)),
      'cantidad'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'precio_unitario' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('factura_detalle[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FacturaDetalle';
  }


}
