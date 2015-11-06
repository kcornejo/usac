<?php

/**
 * Proveedor filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseProveedorFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'correoElectronico' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombreContacto'    => new sfWidgetFormFilterInput(),
      'telefono'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudad'            => new sfWidgetFormFilterInput(),
      'observacion'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'direccion'         => new sfValidatorPass(array('required' => false)),
      'correoElectronico' => new sfValidatorPass(array('required' => false)),
      'nombreContacto'    => new sfValidatorPass(array('required' => false)),
      'telefono'          => new sfValidatorPass(array('required' => false)),
      'ciudad'            => new sfValidatorPass(array('required' => false)),
      'observacion'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('proveedor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proveedor';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'nombre'            => 'Text',
      'direccion'         => 'Text',
      'correoElectronico' => 'Text',
      'nombreContacto'    => 'Text',
      'telefono'          => 'Text',
      'ciudad'            => 'Text',
      'observacion'       => 'Text',
    );
  }
}
