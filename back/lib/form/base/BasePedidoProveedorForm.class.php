<?php

/**
 * PedidoProveedor form base class.
 *
 * @method PedidoProveedor getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BasePedidoProveedorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'fecha'        => new sfWidgetFormDate(),
      'descripcion'  => new sfWidgetFormInputText(),
      'estado'       => new sfWidgetFormInputText(),
      'usuario_id'   => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => true)),
      'proveedor_id' => new sfWidgetFormPropelChoice(array('model' => 'Proveedor', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'fecha'        => new sfValidatorDate(),
      'descripcion'  => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'estado'       => new sfValidatorString(array('max_length' => 30)),
      'usuario_id'   => new sfValidatorPropelChoice(array('model' => 'Usuario', 'column' => 'id', 'required' => false)),
      'proveedor_id' => new sfValidatorPropelChoice(array('model' => 'Proveedor', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pedido_proveedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PedidoProveedor';
  }


}
