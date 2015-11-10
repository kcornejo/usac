<?php

/**
 * DetallePedidoProveedor form base class.
 *
 * @method DetallePedidoProveedor getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseDetallePedidoProveedorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'producto_id'         => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'cantidad'            => new sfWidgetFormInputText(),
      'precio'              => new sfWidgetFormInputText(),
      'pedido_proveedor_id' => new sfWidgetFormPropelChoice(array('model' => 'PedidoProveedor', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'producto_id'         => new sfValidatorPropelChoice(array('model' => 'Producto', 'column' => 'id', 'required' => false)),
      'cantidad'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'precio'              => new sfValidatorString(array('max_length' => 20)),
      'pedido_proveedor_id' => new sfValidatorPropelChoice(array('model' => 'PedidoProveedor', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('detalle_pedido_proveedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetallePedidoProveedor';
  }


}
