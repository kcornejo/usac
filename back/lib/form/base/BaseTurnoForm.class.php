<?php

/**
 * Turno form base class.
 *
 * @method Turno getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseTurnoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'estado'          => new sfWidgetFormInputText(),
      'no_turno'        => new sfWidgetFormInputText(),
      'jugador_mesa_id' => new sfWidgetFormPropelChoice(array('model' => 'JugadorMesa', 'add_empty' => true)),
      'mano'            => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'estado'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'no_turno'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'jugador_mesa_id' => new sfValidatorPropelChoice(array('model' => 'JugadorMesa', 'column' => 'id', 'required' => false)),
      'mano'            => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('turno[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Turno';
  }


}
