<?php

/**
 * Usuario filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'clave'      => new sfWidgetFormFilterInput(),
      'nombre'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellido'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'perfil_id'  => new sfWidgetFormPropelChoice(array('model' => 'Perfil', 'add_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_by' => new sfWidgetFormFilterInput(),
      'updated_by' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'clave'      => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'apellido'   => new sfValidatorPass(array('required' => false)),
      'perfil_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Perfil', 'column' => 'id')),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by' => new sfValidatorPass(array('required' => false)),
      'updated_by' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'usuario'    => 'Text',
      'clave'      => 'Text',
      'nombre'     => 'Text',
      'apellido'   => 'Text',
      'perfil_id'  => 'ForeignKey',
      'created_at' => 'Date',
      'updated_at' => 'Date',
      'created_by' => 'Text',
      'updated_by' => 'Text',
    );
  }
}
