<?php

/**
 * Transaccion form base class.
 *
 * @method Transaccion getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseTransaccionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'serie'               => new sfWidgetFormInputText(),
      'documento'           => new sfWidgetFormInputText(),
      'cliente_id'          => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => true)),
      'usuario_id'          => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => true)),
      'tipo_transaccion_id' => new sfWidgetFormPropelChoice(array('model' => 'TipoTransaccion', 'add_empty' => true)),
      'noTarjeta'           => new sfWidgetFormInputText(),
      'total'               => new sfWidgetFormInputText(),
      'direccion'           => new sfWidgetFormInputText(),
      'tipo_pago_id'        => new sfWidgetFormPropelChoice(array('model' => 'TipoPago', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'serie'               => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'documento'           => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'cliente_id'          => new sfValidatorPropelChoice(array('model' => 'Cliente', 'column' => 'id', 'required' => false)),
      'usuario_id'          => new sfValidatorPropelChoice(array('model' => 'Usuario', 'column' => 'id', 'required' => false)),
      'tipo_transaccion_id' => new sfValidatorPropelChoice(array('model' => 'TipoTransaccion', 'column' => 'id', 'required' => false)),
      'noTarjeta'           => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'total'               => new sfValidatorNumber(array('required' => false)),
      'direccion'           => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'tipo_pago_id'        => new sfValidatorPropelChoice(array('model' => 'TipoPago', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('transaccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Transaccion';
  }


}
