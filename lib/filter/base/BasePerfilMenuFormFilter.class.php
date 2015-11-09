<?php

/**
 * PerfilMenu filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BasePerfilMenuFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'perfil_id'  => new sfWidgetFormPropelChoice(array('model' => 'Perfil', 'add_empty' => true)),
      'menu_id'    => new sfWidgetFormPropelChoice(array('model' => 'Menu', 'add_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_by' => new sfWidgetFormFilterInput(),
      'updated_by' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'perfil_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Perfil', 'column' => 'id')),
      'menu_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Menu', 'column' => 'id')),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by' => new sfValidatorPass(array('required' => false)),
      'updated_by' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('perfil_menu_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PerfilMenu';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'perfil_id'  => 'ForeignKey',
      'menu_id'    => 'ForeignKey',
      'created_at' => 'Date',
      'updated_at' => 'Date',
      'created_by' => 'Text',
      'updated_by' => 'Text',
    );
  }
}
