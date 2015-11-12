<?php

/**
 * PedidoProveedor filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Univ
 */
abstract class BasePedidoProveedorFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'descripcion'  => new sfWidgetFormFilterInput(),
      'estado'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario_id'   => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => true)),
      'proveedor_id' => new sfWidgetFormPropelChoice(array('model' => 'Proveedor', 'add_empty' => true)),
      'serie'        => new sfWidgetFormFilterInput(),
      'documento'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'fecha'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'descripcion'  => new sfValidatorPass(array('required' => false)),
      'estado'       => new sfValidatorPass(array('required' => false)),
      'usuario_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Usuario', 'column' => 'id')),
      'proveedor_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Proveedor', 'column' => 'id')),
      'serie'        => new sfValidatorPass(array('required' => false)),
      'documento'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pedido_proveedor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PedidoProveedor';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'fecha'        => 'Date',
      'descripcion'  => 'Text',
      'estado'       => 'Text',
      'usuario_id'   => 'ForeignKey',
      'proveedor_id' => 'ForeignKey',
      'serie'        => 'Text',
      'documento'    => 'Text',
    );
  }
}
