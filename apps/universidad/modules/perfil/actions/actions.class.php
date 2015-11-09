<?php

require_once dirname(__FILE__) . '/../lib/perfilGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/perfilGeneratorHelper.class.php';

/**
 * perfil actions.
 *
 * @package    universidad
 * @subpackage perfil
 * @author     Univ
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class perfilActions extends autoPerfilActions {

    public function executeAcceso(sfWebRequest $request) {

        $id = $request->getParameter('id');
        $defaults = array();
        $Menu = MenuQuery::create()
                ->usePerfilMenuQuery()
                ->filterByPerfilId($id)
                ->endUse()
                ->find();
        foreach ($Menu as $fila) {
            $defaults['Menu'][$fila->getId()] = true;
        }
        $this->form = new AccesoForm($defaults);
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('acceso'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                PerfilMenuQuery::create()->findByPerfilId($id)->delete();
                foreach ($valores['Menu'] as $fila) {
                    $PerfilMenu = new PerfilMenu();
                    $PerfilMenu->setPerfilId($id);
                    $PerfilMenu->setMenuId($fila);
                    $PerfilMenu->save();
                }
                $this->getUser()->setFlash('exito', 'Asignacion de Menús realizado correcamente.');
                $this->redirect('perfil/index');
            }
        }
        $this->id = $id;
    }

}
