<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading panel-info">
                Detalle de Venta
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3><b>Cliente:</b> <?php echo $factura->getCliente()->getNombre() ?></h3>
                        <h3><b>Tipo de Pago:</b> <?php echo $factura->getTipoPago()->getNombre() ?></h3>
                    </div>
                    <div class="col-md-6">
                        <h3>Factura No: <?php echo sprintf("%05d", $factura->getId()) ?></h3>

                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-6">
                        <form class="form form-horizontal" method="POST" action="<?php echo url_for('venta/detalle') . "?id=" . $id ?>">
                            <?php echo $form ?>
                            <hr/>
                            <button type="submit" class="btn btn-info">
                                Ingresar Detalle
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </form>
                        <hr/>
                        <a class="btn btn-success btn-lg" href="<?php echo url_for('venta/confirmar') . "?id=" . $id ?>">
                            <i class="fa fa-money"></i>
                            Facturar y Pagar
                        </a>
                        <a class="btn btn-danger btn-lg" href="<?php echo url_for('venta/eliminar') . "?id=" . $id ?>">
                            <i class="fa fa-money"></i>
                            Eliminar Factura
                        </a>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Proveedor</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0; ?>
                                <?php foreach ($detalles as $fila): ?>
                                    <tr>
                                        <td><?php echo $fila->getProveedor()->getNombre() ?></td>
                                        <td><?php echo $fila->getProducto()->getDescripcion() ?></td>
                                        <td><?php echo $fila->getCantidad() ?></td>
                                        <td><?php echo number_format($fila->getPrecioUnitario(), 2) ?></td>
                                        <td><?php echo number_format($fila->getPrecioUnitario() * $fila->getCantidad(), 2) ?></td>
                                        <?php $total += $fila->getPrecioUnitario() * $fila->getCantidad() ?>
                                        <td>
                                            <a class="btn btn-danger btn-xs" href="<?php echo url_for('venta/eliminarDetalle?id=' . $fila->getId() . '&factura_id=' . $id) ?>">
                                                <i class="fa fa-times"></i>
                                                Eliminar registro
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <hr/>
                        <h3>Total: <?php echo number_format($total, 2) ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>