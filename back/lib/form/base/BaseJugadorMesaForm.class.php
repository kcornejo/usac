<?php

/**
 * JugadorMesa form base class.
 *
 * @method JugadorMesa getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseJugadorMesaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'mesa_id'    => new sfWidgetFormPropelChoice(array('model' => 'Mesa', 'add_empty' => true)),
      'estado'     => new sfWidgetFormInputText(),
      'jugador_id' => new sfWidgetFormPropelChoice(array('model' => 'Jugador', 'add_empty' => true)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_by' => new sfWidgetFormInputText(),
      'updated_by' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'mesa_id'    => new sfValidatorPropelChoice(array('model' => 'Mesa', 'column' => 'id', 'required' => false)),
      'estado'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'jugador_id' => new sfValidatorPropelChoice(array('model' => 'Jugador', 'column' => 'id', 'required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_by' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_by' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jugador_mesa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'JugadorMesa';
  }


}
