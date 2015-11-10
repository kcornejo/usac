<?php

/**
 * Factura form base class.
 *
 * @method Factura getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseFacturaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'cliente_id'   => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => true)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'created_by'   => new sfWidgetFormInputText(),
      'updated_by'   => new sfWidgetFormInputText(),
      'total'        => new sfWidgetFormInputText(),
      'tipo_pago_id' => new sfWidgetFormPropelChoice(array('model' => 'TipoPago', 'add_empty' => true)),
      'activo'       => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'cliente_id'   => new sfValidatorPropelChoice(array('model' => 'Cliente', 'column' => 'id', 'required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
      'created_by'   => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'updated_by'   => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'total'        => new sfValidatorNumber(array('required' => false)),
      'tipo_pago_id' => new sfValidatorPropelChoice(array('model' => 'TipoPago', 'column' => 'id', 'required' => false)),
      'activo'       => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('factura[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Factura';
  }


}
