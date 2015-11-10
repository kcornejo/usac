<img src="/vendor/dist/img/logo_farmacia.png" style="width:150px"/>
<h3>Datos de Factura</h3>
<table style="width:100%">
    <tr>
        <td><h3><b>Cliente:</b> <?php echo $factura->getCliente()->getNombre() ?></h3></td>
        <td><h3>Factura No: <?php echo sprintf("%05d", $factura->getId()) ?></h3></td>
    </tr>
    <tr>
        <td><h3><b>Tipo de Pago:</b> <?php echo $factura->getTipoPago()->getNombre() ?></h3></td>
        <td></td>
    </tr>
</table>
<hr/>
<h3>Detalles de Factura</h3>
<table style="width:100%">
    <thead>
        <tr>
            <th><b>Proveedor</b></th>
            <th><b>Producto</b></th>
            <th><b>Cantidad</b></th>
            <th><b>Precio</b></th>
            <th><b>Total</b></th>
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
            </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="4"><h3><b>Total:</b></h3></td>
            <td><h3><b><?php echo number_format($total, 2) ?></b></h3></td>
        </tr>
    </tbody>
</table>