<?php

/**
 * Mesa form base class.
 *
 * @method Mesa getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseMesaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_by' => new sfWidgetFormInputText(),
      'updated_by' => new sfWidgetFormInputText(),
      'activo'     => new sfWidgetFormInputCheckbox(),
      'turno'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_by' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_by' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'activo'     => new sfValidatorBoolean(array('required' => false)),
      'turno'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mesa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mesa';
  }


}
