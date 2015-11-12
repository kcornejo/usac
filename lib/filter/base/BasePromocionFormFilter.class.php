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
      'activo'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fecha_inicio' => new sfWidgetFormFilterInput(),
      'fecha_fin'    => new sfWidgetFormFilterInput(),
      'producto_id'  => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'descuento'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'activo'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fecha_inicio' => new sfValidatorPass(array('required' => false)),
      'fecha_fin'    => new sfValidatorPass(array('required' => false)),
      'producto_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Producto', 'column' => 'id')),
      'descuento'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
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
      'id'           => 'Number',
      'activo'       => 'Boolean',
      'fecha_inicio' => 'Text',
      'fecha_fin'    => 'Text',
      'producto_id'  => 'ForeignKey',
      'descuento'    => 'Number',
    );
  }
}
