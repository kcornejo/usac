<?php

/**
 * Factura filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseFacturaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cliente_id'   => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => true)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_by'   => new sfWidgetFormFilterInput(),
      'updated_by'   => new sfWidgetFormFilterInput(),
      'total'        => new sfWidgetFormFilterInput(),
      'tipo_pago_id' => new sfWidgetFormPropelChoice(array('model' => 'TipoPago', 'add_empty' => true)),
      'activo'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'cliente_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Cliente', 'column' => 'id')),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by'   => new sfValidatorPass(array('required' => false)),
      'updated_by'   => new sfValidatorPass(array('required' => false)),
      'total'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_pago_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoPago', 'column' => 'id')),
      'activo'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('factura_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Factura';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'cliente_id'   => 'ForeignKey',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
      'created_by'   => 'Text',
      'updated_by'   => 'Text',
      'total'        => 'Number',
      'tipo_pago_id' => 'ForeignKey',
      'activo'       => 'Boolean',
    );
  }
}
