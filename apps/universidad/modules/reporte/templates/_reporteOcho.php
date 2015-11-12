<h3>Productos</h3>
<br/>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Producto</td>
            <td>Cantidad</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $dato): ?>
            <tr>
                <td><?php echo $dato->getProducto()->getDescripcion() ?></td>
                <td><?php echo $dato->getSuma() ?></td>
            </tr>
        <?Php endforeach; ?>
    </tbody>
</table>
<br/><br/>
<h3>Marcas</h3>
<br/>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Marca</td>
            <td>Cantidad</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($marcas as $dato): ?>
            <tr>
                <td><?php echo $dato->getProducto()->getMarca()->getDescripcion() ?></td>
                <td><?php echo $dato->getSuma() ?></td>
            </tr>
        <?Php endforeach; ?>
    </tbody>
</table>
<br/><br/>
<h3>Tipo de Productos</h3>
<br/>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Tipos de Producto</td>
            <td>Cantidad</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tipos as $dato): ?>
            <tr>
                <td><?php echo $dato->getProducto()->getTipoProducto()->getDescripcion() ?></td>
                <td><?php echo $dato->getSuma() ?></td>
            </tr>
        <?Php endforeach; ?>
    </tbody>
</table>
<br/><br/>
<h3>Tipo de Presentacion</h3>
<br/>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Tipos de Presentacion</td>
            <td>Cantidad</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($presentacion as $dato): ?>
            <tr>
                <td><?php echo $dato->getProducto()  ?></td>
                <td><?php echo $dato->getSuma() ?></td>
            </tr>
        <?Php endforeach; ?>
    </tbody>
</table>