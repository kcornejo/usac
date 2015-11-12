<?php

/**
 * Movimiento filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseMovimientoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'proveedor_id'    => new sfWidgetFormPropelChoice(array('model' => 'Proveedor', 'add_empty' => true)),
      'cliente_id'      => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => true)),
      'tipo_movimiento' => new sfWidgetFormFilterInput(),
      'producto_id'     => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'cantidad'        => new sfWidgetFormFilterInput(),
      'fecha'           => new sfWidgetFormFilterInput(),
      'precio'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'proveedor_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Proveedor', 'column' => 'id')),
      'cliente_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Cliente', 'column' => 'id')),
      'tipo_movimiento' => new sfValidatorPass(array('required' => false)),
      'producto_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Producto', 'column' => 'id')),
      'cantidad'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha'           => new sfValidatorPass(array('required' => false)),
      'precio'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('movimiento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Movimiento';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'proveedor_id'    => 'ForeignKey',
      'cliente_id'      => 'ForeignKey',
      'tipo_movimiento' => 'Text',
      'producto_id'     => 'ForeignKey',
      'cantidad'        => 'Number',
      'fecha'           => 'Text',
      'precio'          => 'Number',
    );
  }
}
