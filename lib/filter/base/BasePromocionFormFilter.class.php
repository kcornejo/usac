<?php

/**
 * Promocion filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BasePromocionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion'      => new sfWidgetFormFilterInput(),
      'fechaInicial'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechaFinal'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'estadoPromo'      => new sfWidgetFormFilterInput(),
      'producto_id'      => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'descuento'        => new sfWidgetFormFilterInput(),
      'promocion_global' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'descripcion'      => new sfValidatorPass(array('required' => false)),
      'fechaInicial'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fechaFinal'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'estadoPromo'      => new sfValidatorPass(array('required' => false)),
      'producto_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Producto', 'column' => 'id')),
      'descuento'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'promocion_global' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('promocion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Promocion';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'descripcion'      => 'Text',
      'fechaInicial'     => 'Date',
      'fechaFinal'       => 'Date',
      'estadoPromo'      => 'Text',
      'producto_id'      => 'ForeignKey',
      'descuento'        => 'Number',
      'promocion_global' => 'Boolean',
    );
  }
}
