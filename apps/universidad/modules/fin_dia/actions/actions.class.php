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
        $datos = array();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('fin_dia'));

            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $fechaArray = explode('/', $valores['Fecha']);
                $fecha = $fechaArray[2] . '-' . $fechaArray[1] . '-' . $fechaArray[0];
                $valores['Fecha'] = $fecha;
                $ventas = MovimientoQuery::create()
                        ->filterByTipoMovimiento('-')
                        ->filterByFecha($valores['Fecha'])
                        ->find();
                $listaCompras = array();
                foreach ($ventas as $fila) {
                    $lista = array();
                    $lista['Proveedor'] = $fila->getProveedor()->getNombre();
                    $lista['Producto'] = $fila->getProducto()->getDescripcion();
                    $lista['Cantidad'] = $fila->getCantidad();
                    $lista['Precio'] = $fila->getPrecio();
                    $lista['Total'] = $fila->getPrecio() * $fila->getCantidad();
                    $listaCompras[] = $lista;
                }
                $datos['ventas'] = $listaCompras;
                $compras = MovimientoQuery::create()
                        ->filterByTipoMovimiento('+')
                        ->filterByFecha($valores['Fecha'])
                        ->find();
                $listaVentas = array();
                foreach ($compras as $fila) {
                    $lista = array();
                    $lista['Proveedor'] = $fila->getProveedor()->getNombre();
                    $lista['Producto'] = $fila->getProducto()->getDescripcion();
                    $lista['Cantidad'] = $fila->getCantidad();
                    $lista['Precio'] = $fila->getPrecio();
                    $lista['Total'] = $fila->getPrecio() * $fila->getCantidad();
                    $listaVentas[] = $lista;
                }
                $datos['compras'] = $listaVentas;

                $Productos = ProductoQuery::create()
                        ->find();
                $listaProductos = array();
                foreach ($Productos as $p) {
                    $lista = array();
                    $lista['Producto'] = $p->getDescripcion();
                    $fecha = $valores['Fecha'];
                    $suma = MovimientoQuery::create()
                            ->filterByTipoMovimiento('+')
                            ->filterByProductoId($p->getId())
                            ->where("fecha < '$fecha'")
                            ->withColumn('SUM(cantidad)', 'Total')
                            ->findOne();
                    if ($suma) {
                        $suma = $suma->getTotal();
                    } else {
                        $suma = 0;
                    }
                    $resta = MovimientoQuery::create()
                            ->filterByTipoMovimiento('-')
                            ->filterByProductoId($p->getId())
                            ->where("fecha < '$fecha'")
                            ->withColumn('SUM(cantidad)', 'Total')
                            ->findOne();
                    if ($resta) {
                        $resta = $resta->getTotal();
                    } else {
                        $resta = 0;
                    }
                    $lista['Inicio'] = $suma - $resta;
                    $compras = MovimientoQuery::create()
                            ->filterByTipoMovimiento('+')
                            ->filterByFecha($valores['Fecha'])
                            ->filterByProductoId($p->getId())
                            ->withColumn('SUM(cantidad)', 'Total')
                            ->findOne();
                    if ($compras) {
                        $compras = $compras->getTotal();
                    } else {
                        $compras = 0;
                    }
                    $lista['Compra'] = $compras;
                    $ventas = MovimientoQuery::create()
                            ->filterByTipoMovimiento('+')
                            ->filterByFecha($valores['Fecha'])
                            ->filterByProductoId($p->getId())
                            ->withColumn('SUM(cantidad)', 'Total')
                            ->findOne();
                    if ($ventas) {
                        $ventas = $ventas->getTotal();
                    } else {
                        $ventas = 0;
                    }
                    $lista['Ventas'] = $ventas;
                    $inventario = InventarioQuery::create()
                            ->filterByProductoId($p->getId())
                            ->findOne();
                    if ($inventario) {
                        $lista['Existencia'] = $inventario->getCantidad();
                        $lista['Precio'] = $inventario->getPrecioCompra();
                    } else {
                        $lista['Existencia'] = 0;
                        $lista['Precio'] = 0;
                    }
                    $listaProductos[] = $lista;
                }
                $datos["inventarios"] = $listaProductos;
            }
        }
        $this->datos = $datos;
    }

}
