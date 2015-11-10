<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td><b>Producto</b></td>
            <td><b>Marca</b></td>
            <td><b>Tipo de Producto</b></td>
            <td><b>Tipo de Presentacion</b></td>
            <td><b>Existencia</b></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $dato): ?>
            <tr>
                <td><?php echo $dato->getDescripcion() ?></td>
                <td><?php echo $dato->getMarca() ?></td>
                <td><?php echo $dato->getTipoProducto() ?></td>
                <td><?php echo $dato->getTipoPresentacion() ?></td>
                <td><?php echo Producto::obtenerExistencia($dato->getId()) ?></td>
            </tr>
        <?Php endforeach; ?>
    </tbody>
</table>