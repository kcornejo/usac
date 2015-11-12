<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td><b>Producto</b></td>
            <td><b>Total</b></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $dato): ?>
            <tr>
                <td><?php echo $dato->getProducto()->getDescripcion() ?></td>
                <td><?php echo $dato->getTotal() ?></td>
            </tr>
        <?Php endforeach; ?>
    </tbody>
</table>