<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td><b>Proveedor</b></td>
            <td><b>Fecha</b></td>
            <td><b>Estado</b></td>
            <td><b>Cantidad de Productos</b></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $dato): ?>
            <tr>
                <td><?php echo $dato->getProveedor()->getNombre() ?></td>
                <td><?php echo $dato->getFecha() ?></td>
                <td><?php echo $dato->getEstado() ?></td>
                <td><?php echo sizeof($dato->getDetallePedidoProveedors()) ?></td>
            </tr>
        <?Php endforeach; ?>
    </tbody>
</table>