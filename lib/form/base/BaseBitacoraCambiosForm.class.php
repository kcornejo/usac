<?php

/**
 * BitacoraCambios form base class.
 *
 * @method BitacoraCambios getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseBitacoraCambiosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'modelo'      => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormInputText(),
      'ip'          => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'created_by'  => new sfWidgetFormInputText(),
      'updated_by'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'modelo'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'descripcion' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ip'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
      'created_by'  => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'updated_by'  => new sfValidatorString(array('max_length' => 32, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bitacora_cambios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BitacoraCambios';
  }


}
