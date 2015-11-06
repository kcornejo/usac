<?php

/**
 * Cliente filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseClienteFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'correo'      => new sfWidgetFormFilterInput(),
      'direccion'   => new sfWidgetFormFilterInput(),
      'telefono'    => new sfWidgetFormFilterInput(),
      'ciudad'      => new sfWidgetFormFilterInput(),
      'observacion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'correo'      => new sfValidatorPass(array('required' => false)),
      'direccion'   => new sfValidatorPass(array('required' => false)),
      'telefono'    => new sfValidatorPass(array('required' => false)),
      'ciudad'      => new sfValidatorPass(array('required' => false)),
      'observacion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cliente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nombre'      => 'Text',
      'correo'      => 'Text',
      'direccion'   => 'Text',
      'telefono'    => 'Text',
      'ciudad'      => 'Text',
      'observacion' => 'Text',
    );
  }
}
