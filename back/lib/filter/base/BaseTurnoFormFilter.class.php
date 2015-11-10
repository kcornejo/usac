<?php

/**
 * Turno filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseTurnoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'estado'          => new sfWidgetFormFilterInput(),
      'no_turno'        => new sfWidgetFormFilterInput(),
      'jugador_mesa_id' => new sfWidgetFormPropelChoice(array('model' => 'JugadorMesa', 'add_empty' => true)),
      'mano'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'estado'          => new sfValidatorPass(array('required' => false)),
      'no_turno'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'jugador_mesa_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'JugadorMesa', 'column' => 'id')),
      'mano'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('turno_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Turno';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'estado'          => 'Text',
      'no_turno'        => 'Number',
      'jugador_mesa_id' => 'ForeignKey',
      'mano'            => 'Text',
    );
  }
}
