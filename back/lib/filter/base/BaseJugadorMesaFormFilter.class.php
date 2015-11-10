<?php

/**
 * JugadorMesa filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseJugadorMesaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'mesa_id'    => new sfWidgetFormPropelChoice(array('model' => 'Mesa', 'add_empty' => true)),
      'estado'     => new sfWidgetFormFilterInput(),
      'jugador_id' => new sfWidgetFormPropelChoice(array('model' => 'Jugador', 'add_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_by' => new sfWidgetFormFilterInput(),
      'updated_by' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'mesa_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Mesa', 'column' => 'id')),
      'estado'     => new sfValidatorPass(array('required' => false)),
      'jugador_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Jugador', 'column' => 'id')),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by' => new sfValidatorPass(array('required' => false)),
      'updated_by' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jugador_mesa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'JugadorMesa';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'mesa_id'    => 'ForeignKey',
      'estado'     => 'Text',
      'jugador_id' => 'ForeignKey',
      'created_at' => 'Date',
      'updated_at' => 'Date',
      'created_by' => 'Text',
      'updated_by' => 'Text',
    );
  }
}
