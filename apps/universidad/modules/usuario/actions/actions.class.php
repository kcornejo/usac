<?php

require_once dirname(__FILE__) . '/../lib/usuarioGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/usuarioGeneratorHelper.class.php';

/**
 * usuario actions.
 *
 * @package    universidad
 * @subpackage usuario
 * @author     Univ
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class usuarioActions extends autoUsuarioActions {

    function executeClave(sfWebRequest $request) {
        $this->id = $request->getParameter('id');
        $this->form = new CAmbioClaveForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('cambio_clave'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $Usuario = UsuarioQuery::create()->findOneById($this->id);
                $Usuario->setClave(sha1($valores['clave']));
                $Usuario->save();
                $this->getUser()->setFlash('exito', 'Cambio de clave efecutado correctamente.');
                $this->redirect('usuario/index');
            }
        }
    }

}
