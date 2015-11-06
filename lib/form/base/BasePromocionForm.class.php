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
      'fechaInicial'     => new sfWidgetFormDate(),
      'fechaFinal'       => new sfWidgetFormDate(),
      'estadoPromo'      => new sfWidgetFormInputText(),
      'producto_id'      => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'descuento'        => new sfWidgetFormInputText(),
      'promocion_global' => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'descripcion'      => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'fechaInicial'     => new sfValidatorDate(),
      'fechaFinal'       => new sfValidatorDate(),
      'estadoPromo'      => new sfValidatorString(array('max_length' => 11, 'required' => false)),
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
