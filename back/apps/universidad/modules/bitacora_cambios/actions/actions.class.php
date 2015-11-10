<?php

/**
 * bitacora_cambios actions.
 *
 * @package    universidad
 * @subpackage bitacora_cambios
 * @author     Univ
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class bitacora_cambiosActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $datos = array();
        $defaults = array('Fecha_Inicio' => date('01/m/Y'), 'Fecha_Fin' => date('t/m/Y'));
        $form = new BitacoraCambiosForm($defaults);
        if ($request->isMethod('POST')) {
            $form->bind($request->getParameter('bitacora_cambios'));
            if ($form->isValid()) {
                $valores = $form->getValues();
                $inicio = $valores['Fecha_Inicio'];
                $fin = $valores['Fecha_Fin'];
                $datos = BitacoraCambiosQuery::create()
                        ->where("created_at <= '$fin'")
                        ->where("created_at >= '$inicio'")
                        ->find();
            }
        }
        $this->datos = $datos;
        $this->form = $form;
    }

}
