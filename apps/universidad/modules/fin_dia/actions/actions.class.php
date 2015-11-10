<?php

/**
 * fin_dia actions.
 *
 * @package    universidad
 * @subpackage fin_dia
 * @author     Univ
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fin_diaActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $defaults = array('Fecha' => date('d/m/Y'));
        $this->form = new FinDiaForm($defaults);
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('fin_dia'));
            if ($this->form->isValid()) {
//                $valores =
            }
        }
    }

}
