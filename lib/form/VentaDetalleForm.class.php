<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VentaDetalleForm
 *
 * @author Kenny Cornejo
 */
class VentaDetalleForm extends sfForm {

    public function configure() {
        $Inventario = InventarioQuery::create()->find();
        $listaInventario = array();
        foreach ($Inventario as $fila) {
            $fecha = date('d/m/Y');
            $Promocion = PromocionQuery::create()
                    ->filterByProductoId($fila->getProductoId())
                    ->where("fecha_inicio <= '$fecha' and fecha_fin >= '$fecha'")
                    ->findOne();
            $descuento = 1;
            if ($Promocion) {
                $descuento = 1 - ($Promocion->getDescuento() / 100);
            }
            $listaInventario[$fila->getProductoId()] = "(" . $fila->getProveedor()->getNombre() . ") " . $fila->getProducto()->getDescripcion() . " " . $fila->getCantidad() . " x " . " -Q" . number_format($fila->getPrecioCompra() * 1.2 * $descuento, 2);
        }
        $this->setWidget('Producto', new sfWidgetFormChoice(array('choices' => $listaInventario), array('class' => 'form-control')));
        $this->setWidget('Cantidad', new sfWidgetFormInputText(array(), array('class' => 'form-control')));
        $this->setValidator('Producto', new sfValidatorString(array('required' => true)));
        $this->setValidator('Cantidad', new sfValidatorInteger(array('required' => true)));
        $this->widgetSchema->setNameFormat('venta_detalle[%s]');
    }

}

?>
