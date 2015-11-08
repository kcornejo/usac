<?php

/**
 * seguridad actions.
 *
 * @package    
 * @subpackage seguridad
 * @author     
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */

/**
 * seguridad actions.
 *
 * @package    
 * @subpackage seguridad
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class seguridadActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->forward('default', 'module');
    }

    public function executeLogin(sfWebRequest $request) {
        if ($this->getUser()->isAuthenticated()) {
            $this->redirect('@homepage');
        }
        $this->getUser()->getAttributeHolder()->clear();
        $this->form = new LoginPortalForm();
        if ($request->isMethod('post')) {
            $this->form->bind($request->getParameter("login"));
            if ($this->form->isValid()) {
                $user = sfContext::getInstance()->getUser();
                $user->setAuthenticated(true);
                $valido = $this->getUser()->getAttribute('usuario', null, 'seguridad');
                $usuario = UsuarioQuery::create()->findOneById($valido);
                $this->getUser()->setAttribute('usuario', false, 'administrador');
                $valores = $this->form->getValues();
                $this->redirect("@homepage");
            }
        }
    }

    public function executeLogout(sfWebRequest $request) {
        $this->getUser()->getAttributeHolder('seguridad')->removeNamespace('seguridad');
        $this->getUser()->setAuthenticated(false);
        $this->getUser()->clearCredentials();
//   $this->redirect('inicio/index');
        $this->redirect("inicio/index");
    }

    public function executeCambioclave(sfWebRequest $request) {
        $this->form = new CambioClaveForm();
        if ($request->isMethod('post')) {
            $this->form->bind($request->getParameter('clave'));
            if ($this->form->isValid()) {
                $this->getUser()->setFlash('exito', 'Cambio de Clave Efectuado Exitosamente');
                $this->redirect("seguridad/cambioclave");
            }
        }
    }

}
