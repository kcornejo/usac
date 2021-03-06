<?php

/**
 * inicio actions.
 *
 * @package    estadistica
 * @subpackage inicio
 * @author     Kenny
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inicioActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->facturas = FacturaQuery::create()->findByActivo(true);
    }

}
