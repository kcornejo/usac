<?php

/**
 * Skeleton subclass for representing a row from the 'tipo_transaccion' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/06/15 06:35:00
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class TipoTransaccion extends BaseTipoTransaccion {

    public function save(PropelPDO $con = null) {
        $BitacoraCambios = new BitacoraCambios();
        $BitacoraCambios->setModelo('Tipo de Transaccion');
        $BitacoraCambios->setIp(sfContext::getInstance()->getRequest()->getRemoteAddress());
        if ($this->isNew()) {
            $BitacoraCambios->setDescripcion('Creacion de Tipo de Transaccion: ' . $this->getDescripcion());
        } else {
            $BitacoraCambios->setDescripcion('Modificacion de Tipo de Transaccion: ' . $this->getDescripcion());
        }
        $Usuario = UsuarioQuery::create()->findOneById(sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad'));
        if ($Usuario) {
            $BitacoraCambios->setCreatedBy($Usuario->getUsuario());
        }
        $BitacoraCambios->save();
        return parent::save($con);
    }

}
