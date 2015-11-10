<?php

/**
 * Producto filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseProductoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'marca_id'         => new sfWidgetFormPropelChoice(array('model' => 'Marca', 'add_empty' => true)),
      'tipo_producto_id' => new sfWidgetFormPropelChoice(array('model' => 'TipoProducto', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'descripcion'      => new sfValidatorPass(array('required' => false)),
      'marca_id'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Marca', 'column' => 'id')),
      'tipo_producto_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoProducto', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('producto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Producto';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'descripcion'      => 'Text',
      'marca_id'         => 'ForeignKey',
      'tipo_producto_id' => 'ForeignKey',
    );
  }
}
