<?php

/**
 * Menu form.
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
class MenuForm extends BaseMenuForm {

    public function configure() {
        $Menu = MenuQuery::create()->find();
        $listado = array();
        $listado[""] = '[SUPERIOR]';
        foreach ($Menu as $fila) {
            $listado[$fila->getId()] = $fila->getDescripcion();
        }
        $this->setWidget('superior', new sfWidgetFormChoice(array('choices' => $listado), array('class' => 'form-control input-medium')));
    }

}
