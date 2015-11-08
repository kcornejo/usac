<?php

/**
 * inventario actions.
 *
 * @package    universidad
 * @subpackage inventario
 * @author     Univ
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inventarioActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->form = new IngresoInventarioForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('ingreso_inventario'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $BitacoraCambios = new BitacoraCambios();
                $BitacoraCambios->setModelo('Inventario');
                $Producto = ProductoQuery::create()->findOneById($valores['Producto']);
                $BitacoraCambios->setDescripcion('Ingreso de Inventario de Producto: ' . $Producto->getDescripcion(). ' con cantidad ' .$valores['Cantidad'] );
                $BitacoraCambios->setIp($request->getRemoteAddress());
                $Usuario = UsuarioQuery::create()->findOneById(sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad'));
                if ($Usuario) {
                    $BitacoraCambios->setCreatedBy($Usuario->getUsuario());
                }
                $BitacoraCambios->save();
                $Comprobacion = InventarioQuery::create()
                        ->filterByProductoId($valores['Producto'])
                        ->filterByProveedorId($valores['Proveedor'])
                        ->findOne();
                if ($Comprobacion) {
                    $Comprobacion->setCantidad($Comprobacion->getCantidad() + $valores['Cantidad']);
                    $anterior = $Comprobacion->getCantidad() * $Comprobacion->getPrecioCompra();
                    $actual = $valores['Cantidad'] * $valores['Precio'];
                    $suma = ($anterior + $actual) / ($valores['Cantidad'] + $Comprobacion->getCantidad());
                    $Comprobacion->setPrecioCompra($suma);
                    $Comprobacion->save();
                } else {
                    $Inventario = new Inventario();
                    $Inventario->setPrecioCompra($valores['Precio']);
                    $Inventario->setProductoId($valores['Producto']);
                    $Inventario->setProveedorId($valores['Proveedor']);
                    $Inventario->setCantidad($valores['Cantidad']);
                    $Inventario->save();
                }

                $this->redirect('inventario/index');
            }
        }
        $this->cinco = InventarioQuery::create()
                ->orderById('DESC')
                ->limit(5)
                ->find();
    }

}
