<?php

/**
 * DetallePedidoProveedor filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseDetallePedidoProveedorFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'producto_id'         => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'cantidad'            => new sfWidgetFormFilterInput(),
      'estado'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pedido_proveedor_id' => new sfWidgetFormPropelChoice(array('model' => 'PedidoProveedor', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'producto_id'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Producto', 'column' => 'id')),
      'cantidad'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado'              => new sfValidatorPass(array('required' => false)),
      'pedido_proveedor_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PedidoProveedor', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('detalle_pedido_proveedor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetallePedidoProveedor';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'producto_id'         => 'ForeignKey',
      'cantidad'            => 'Number',
      'estado'              => 'Text',
      'pedido_proveedor_id' => 'ForeignKey',
    );
  }
}
