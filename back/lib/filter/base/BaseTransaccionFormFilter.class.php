<?php

/**
 * Transaccion filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BaseTransaccionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'serie'               => new sfWidgetFormFilterInput(),
      'documento'           => new sfWidgetFormFilterInput(),
      'cliente_id'          => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => true)),
      'usuario_id'          => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => true)),
      'tipo_transaccion_id' => new sfWidgetFormPropelChoice(array('model' => 'TipoTransaccion', 'add_empty' => true)),
      'no_tarjeta'          => new sfWidgetFormFilterInput(),
      'total'               => new sfWidgetFormFilterInput(),
      'direccion'           => new sfWidgetFormFilterInput(),
      'tipo_pago_id'        => new sfWidgetFormPropelChoice(array('model' => 'TipoPago', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'serie'               => new sfValidatorPass(array('required' => false)),
      'documento'           => new sfValidatorPass(array('required' => false)),
      'cliente_id'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Cliente', 'column' => 'id')),
      'usuario_id'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Usuario', 'column' => 'id')),
      'tipo_transaccion_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoTransaccion', 'column' => 'id')),
      'no_tarjeta'          => new sfValidatorPass(array('required' => false)),
      'total'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'direccion'           => new sfValidatorPass(array('required' => false)),
      'tipo_pago_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoPago', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('transaccion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Transaccion';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'serie'               => 'Text',
      'documento'           => 'Text',
      'cliente_id'          => 'ForeignKey',
      'usuario_id'          => 'ForeignKey',
      'tipo_transaccion_id' => 'ForeignKey',
      'no_tarjeta'          => 'Text',
      'total'               => 'Number',
      'direccion'           => 'Text',
      'tipo_pago_id'        => 'ForeignKey',
    );
  }
}
