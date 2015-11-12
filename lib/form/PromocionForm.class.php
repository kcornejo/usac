<?php

/**
 * Promocion form.
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
class PromocionForm extends BasePromocionForm
{
  public function configure()
  {
      $this->setWidget('fecha_inicio', new sfWidgetFormInputText(array(), array('class' => 'datemask')));
      $this->setWidget('fecha_fin', new sfWidgetFormInputText(array(), array('class' => 'datemask')));
  }
}
