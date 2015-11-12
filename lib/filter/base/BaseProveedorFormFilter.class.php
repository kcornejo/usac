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
      'correo_eletronico' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_contacto'   => new sfWidgetFormFilterInput(),
      'telefono'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudad'            => new sfWidgetFormFilterInput(),
      'observacion'       => new sfWidgetFormFilterInput(),
      'nit'               => new sfWidgetFormFilterInput(),
      'razon_social'      => new sfWidgetFormFilterInput(),
      'contacto'          => new sfWidgetFormFilterInput(),
      'referencia'        => new sfWidgetFormFilterInput(),
      'correo'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'direccion'         => new sfValidatorPass(array('required' => false)),
      'correo_eletronico' => new sfValidatorPass(array('required' => false)),
      'nombre_contacto'   => new sfValidatorPass(array('required' => false)),
      'telefono'          => new sfValidatorPass(array('required' => false)),
      'ciudad'            => new sfValidatorPass(array('required' => false)),
      'observacion'       => new sfValidatorPass(array('required' => false)),
      'nit'               => new sfValidatorPass(array('required' => false)),
      'razon_social'      => new sfValidatorPass(array('required' => false)),
      'contacto'          => new sfValidatorPass(array('required' => false)),
      'referencia'        => new sfValidatorPass(array('required' => false)),
      'correo'            => new sfValidatorPass(array('required' => false)),
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
      'correo_eletronico' => 'Text',
      'nombre_contacto'   => 'Text',
      'telefono'          => 'Text',
      'ciudad'            => 'Text',
      'observacion'       => 'Text',
      'nit'               => 'Text',
      'razon_social'      => 'Text',
      'contacto'          => 'Text',
      'referencia'        => 'Text',
      'correo'            => 'Text',
    );
  }
}
