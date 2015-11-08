<?php

/**
 * Inventario filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseInventarioFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'producto_id'   => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'cantidad'      => new sfWidgetFormFilterInput(),
      'precio_compra' => new sfWidgetFormFilterInput(),
      'proveedor_id'  => new sfWidgetFormPropelChoice(array('model' => 'Proveedor', 'add_empty' => true)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_by'    => new sfWidgetFormFilterInput(),
      'updated_by'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'producto_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Producto', 'column' => 'id')),
      'cantidad'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'precio_compra' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'proveedor_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Proveedor', 'column' => 'id')),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by'    => new sfValidatorPass(array('required' => false)),
      'updated_by'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('inventario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Inventario';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'producto_id'   => 'ForeignKey',
      'cantidad'      => 'Number',
      'precio_compra' => 'Number',
      'proveedor_id'  => 'ForeignKey',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
      'created_by'    => 'Text',
      'updated_by'    => 'Text',
    );
  }
}
