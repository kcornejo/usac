<?php

/**
 * TipoTransaccion filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseTipoTransaccionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechaCreacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'descripcion'   => new sfValidatorPass(array('required' => false)),
      'fechaCreacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('tipo_transaccion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoTransaccion';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'descripcion'   => 'Text',
      'fechaCreacion' => 'Date',
    );
  }
}
