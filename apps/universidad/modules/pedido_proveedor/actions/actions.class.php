<?php

/**
 * pedido_proveedor actions.
 *
 * @package    universidad
 * @subpackage pedido_proveedor
 * @author     Univ
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pedido_proveedorActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeConfirmado(sfWebRequest $request) {
        $id = $request->getParameter('id');
        $BitacoraCambios = new BitacoraCambios();
        $BitacoraCambios->setModelo('Pedido Proveedores');
        $Usuario = UsuarioQuery::create()->findOneById(sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad'));
        $BitacoraCambios->setDescripcion('Cambio de estado de Pedido a Proveedor de entregado a confirmado con id : ' . $id . ' el usuario ' . $Usuario->getNombre());
        $BitacoraCambios->setIp($request->getRemoteAddress());
        $pedido = PedidoProveedorQuery::create()->findOneById($id);
        $pedido->setEstado('Confirmado');
        $pedido->save();
        $this->redirect('pedido_proveedor/index');
    }

    public function executeEntregado(sfWebRequest $request) {
        $id = $request->getParameter('id');
        $BitacoraCambios = new BitacoraCambios();
        $BitacoraCambios->setModelo('Pedido Proveedores');
        $Usuario = UsuarioQuery::create()->findOneById(sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad'));
        $BitacoraCambios->setDescripcion('Cambio de estado de Pedido a Proveedor  a Entregado con id : ' . $id . ' el usuario ' . $Usuario->getNombre());
        $BitacoraCambios->setIp($request->getRemoteAddress());
        $pedido = PedidoProveedorQuery::create()->findOneById($id);
        $pedido->setEstado('Entregado');
        $pedido->save();
        $detalle_pedido = DetallePedidoProveedorQuery::create()->filterByPedidoProveedor($pedido)->find();
        foreach ($detalle_pedido as $det) {
            $Comprobacion = InventarioQuery::create()
                    ->filterByProductoId($det->getProductoId())
                    ->filterByProveedorId($pedido->getProveedorId())
                    ->findOne();
            if ($Comprobacion) {
                $Comprobacion->setCantidad($Comprobacion->getCantidad() + $det->getCantidad());
                $anterior = $det->getCantidad() * $Comprobacion->getPrecioCompra();
                $actual = $det->getCantidad() * $det->getPrecio();
                $suma = ($anterior + $actual) / ($det->getCantidad() + $Comprobacion->getCantidad());
                $Comprobacion->setPrecioCompra($suma);
                $Comprobacion->save();
            } else {
                $Inventario = new Inventario();
                $Inventario->setPrecioCompra($det->getPrecio());
                $Inventario->setProductoId($det->getProductoId());
                $Inventario->setProveedorId($pedido->getProveedorId());
                $Inventario->setCantidad($det->getCantidad());
                $Inventario->save();
            }
            $Movimiento = new Movimiento();
            $Movimiento->setTipoMovimiento('+');
            $Movimiento->setProveedorId($pedido->getProveedorId());
            $Movimiento->setProductoId($det->getProductoId());
            $Movimiento->setCantidad($det->getCantidad());
            $Movimiento->setPrecio($det->getPrecio());
            $Movimiento->save();
        }
        $this->redirect('pedido_proveedor/index');
    }

    public function executeIndex(sfWebRequest $request) {
        $this->form = new IngresoPedidoProveedorForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('ingreso_pedprov'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $BitacoraCambios = new BitacoraCambios();
                $BitacoraCambios->setModelo('Pedido Proveedores');
                $proveedor = ProveedorQuery::create()->filterById($valores['Proveedor'])->findOne();
                $BitacoraCambios->setDescripcion('Ingreso de Pedido a Proveedor: ' . $proveedor->getNombre());
                $BitacoraCambios->setIp($request->getRemoteAddress());
                $pedido = new PedidoProveedor();
                $pedido->setProveedor($proveedor);
                $pedido->setFecha(date('d/m/y'));
                $Usuario = UsuarioQuery::create()->findOneById(sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad'));
                $pedido->setUsuario($Usuario);
                $pedido->setDescripcion($valores['Descripcion']);
                $pedido->setEstado($valores['Estado']);
                $pedido->save();
                $this->redirect('pedido_proveedor/index');
            }
        }

        $this->pedidos = PedidoProveedorQuery::create()->orderById('DESC')->find();
    }

    public function executeDetalle(sfWebRequest $request) {
        $this->id = $request->getParameter('id');
        $cabecera = PedidoProveedorQuery::create()->findOneById($this->id);
        $this->estado = $cabecera->getEstado();
        $this->form = new IngresoDetallePedidoProveedorForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('ingreso_detpedprov'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $BitacoraCambios = new BitacoraCambios();
                $BitacoraCambios->setModelo('Detalle Pedido Proveedores');
                $BitacoraCambios->setDescripcion('Ingreso de Detalle de  Pedido a Proveedor con id :' . $this->id);
                $BitacoraCambios->setIp($request->getRemoteAddress());
                $pedido = new DetallePedidoProveedor();
                $Usuario = UsuarioQuery::create()->findOneById(sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad'));
                $pedido->setProductoId($valores['Producto']);
                $pedido->setCantidad($valores['Cantidad']);
                $pedido->setPrecio($valores['Precio']);
                $pedido->setPedidoProveedorId($this->id);
                $pedido->save();
                $url = 'pedido_proveedor/detalle?id=' . $this->id;
                $this->redirect($url);
            }
        } else {
            $accion = $request->getParameter("accion");
            $iddetalle = $request->getParameter("det");
            if ($accion == "Elimina") {
                $det = DetallePedidoProveedorQuery::create()->filterById($iddetalle)->delete();
            }
        }

        $this->detalles = DetallePedidoProveedorQuery::create()->filterByPedidoProveedorId($this->id)->orderById('Desc')->find();
    }

    public function executeEdita(sfWebRequest $request) {
        $this->id = $request->getParameter('id');
        $iddet = $request->getParameter('det');
        $dets = DetallePedidoProveedorQuery::create()->filterById($iddet)->findOne();
        $this->form = new IngresoDetallePedidoProveedorForm(array("Producto" => $dets->getProducto(), "Cantidad" => $dets->getCantidad(), "Precio" => $dets->getPrecio()));
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('ingreso_detpedprov'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $BitacoraCambios = new BitacoraCambios();
                $BitacoraCambios->setModelo('Detalle Pedido Proveedores');
                $BitacoraCambios->setDescripcion('Edicion de Detalle de  Pedido a Proveedor con id :' . $iddet);
                $BitacoraCambios->setIp($request->getRemoteAddress());
                $pedido = $dets;
                $Usuario = UsuarioQuery::create()->findOneById(sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad'));
                $pedido->setProductoId($valores['Producto']);
                $pedido->setCantidad($valores['Cantidad']);
                $pedido->setPrecio($valores['Precio']);
                $pedido->save();

                $url = 'pedido_proveedor/detalle?id=' . $this->id;
                $this->redirect($url);
            }
        }
    }

}
