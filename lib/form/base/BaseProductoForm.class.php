<?php

/**
 * Producto form base class.
 *
 * @method Producto getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BaseProductoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'descripcion'          => new sfWidgetFormInputText(),
      'marca_id'             => new sfWidgetFormPropelChoice(array('model' => 'Marca', 'add_empty' => true)),
      'tipo_producto_id'     => new sfWidgetFormPropelChoice(array('model' => 'TipoProducto', 'add_empty' => true)),
      'tipo_presentacion_id' => new sfWidgetFormPropelChoice(array('model' => 'TipoPresentacion', 'add_empty' => true)),
      'cantidad_minima'      => new sfWidgetFormInputText(),
      'imagen'               => new sfWidgetFormInputText(),
      'codigo'               => new sfWidgetFormInputText(),
      'precio'               => new sfWidgetFormInputText(),
      'costo'                => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'descripcion'          => new sfValidatorString(array('max_length' => 255)),
      'marca_id'             => new sfValidatorPropelChoice(array('model' => 'Marca', 'column' => 'id', 'required' => false)),
      'tipo_producto_id'     => new sfValidatorPropelChoice(array('model' => 'TipoProducto', 'column' => 'id', 'required' => false)),
      'tipo_presentacion_id' => new sfValidatorPropelChoice(array('model' => 'TipoPresentacion', 'column' => 'id', 'required' => false)),
      'cantidad_minima'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'imagen'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'codigo'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'precio'               => new sfValidatorNumber(array('required' => false)),
      'costo'                => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('producto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Producto';
  }


}
