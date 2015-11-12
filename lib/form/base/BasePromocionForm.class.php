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
      'id'           => new sfWidgetFormInputHidden(),
      'activo'       => new sfWidgetFormInputCheckbox(),
      'fecha_inicio' => new sfWidgetFormInputText(),
      'fecha_fin'    => new sfWidgetFormInputText(),
      'producto_id'  => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => true)),
      'descuento'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'activo'       => new sfValidatorBoolean(array('required' => false)),
      'fecha_inicio' => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'fecha_fin'    => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'producto_id'  => new sfValidatorPropelChoice(array('model' => 'Producto', 'column' => 'id', 'required' => false)),
      'descuento'    => new sfValidatorNumber(array('required' => false)),
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
