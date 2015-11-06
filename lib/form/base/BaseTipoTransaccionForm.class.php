<?php

/**
 * TipoTransaccion form base class.
 *
 * @method TipoTransaccion getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseTipoTransaccionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'descripcion'   => new sfWidgetFormInputText(),
      'fechaCreacion' => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'descripcion'   => new sfValidatorString(array('max_length' => 60)),
      'fechaCreacion' => new sfValidatorDate(),
    ));

    $this->widgetSchema->setNameFormat('tipo_transaccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoTransaccion';
  }


}
