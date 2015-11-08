<?php

/**
 * Promocion form base class.
 *
 * @method Promocion getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
abstract class BasePromocionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'descripcion'      => new sfWidgetFormInputText(),
      'fecha_inicio'     => new sfWidgetFormDate(),
      'fecha_fin'        => new sfWidgetFormDate(),
      'estado'           => new sfWidgetFormInputText(),
      'producto_id'      => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'descuento'        => new sfWidgetFormInputText(),
      'promocion_global' => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'descripcion'      => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'fecha_inicio'     => new sfValidatorDate(),
      'fecha_fin'        => new sfValidatorDate(),
      'estado'           => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'producto_id'      => new sfValidatorPropelChoice(array('model' => 'Producto', 'column' => 'id', 'required' => false)),
      'descuento'        => new sfValidatorNumber(array('required' => false)),
      'promocion_global' => new sfValidatorBoolean(),
    ));

    $this->widgetSchema->setNameFormat('promocion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Promocion';
  }


}
