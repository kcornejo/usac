<?php

/**
 * FacturaDetalle filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseFacturaDetalleFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'factura_id'      => new sfWidgetFormPropelChoice(array('model' => 'Factura', 'add_empty' => true)),
      'producto_id'     => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'proveedor_id'    => new sfWidgetFormPropelChoice(array('model' => 'Proveedor', 'add_empty' => true)),
      'cantidad'        => new sfWidgetFormFilterInput(),
      'precio_unitario' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'factura_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Factura', 'column' => 'id')),
      'producto_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Producto', 'column' => 'id')),
      'proveedor_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Proveedor', 'column' => 'id')),
      'cantidad'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'precio_unitario' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('factura_detalle_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FacturaDetalle';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'factura_id'      => 'ForeignKey',
      'producto_id'     => 'ForeignKey',
      'proveedor_id'    => 'ForeignKey',
      'cantidad'        => 'Number',
      'precio_unitario' => 'Number',
    );
  }
}
