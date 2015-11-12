<?php if (sizeof($datos) > 0): ?>
    <div class="row">
        <div class="col-md-12">
            <h3>Compras</h3>
            <hr/>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Proveedor</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio P.</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php // print_r($datos['compras'][0]['Proveedor']);die();?>
                    <?php foreach ($datos['compras'] as $compra): ?>
                        <tr>
                            <td><?php echo $compra['Proveedor'] ?></td>
                            <td><?php echo $compra['Producto'] ?></td>
                            <td><?php echo $compra['Cantidad'] ?></td>
                            <td><?php echo number_format($compra['Precio'], 2) ?></td>
                            <td><?php echo number_format($compra['Precio'] * $compra['Cantidad'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br/><br/>
            <h3>Ventas</h3>
            <hr/>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Proveedor</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio P.</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos['ventas'] as $compra): ?>
                        <tr>
                            <td><?php echo $compra['Proveedor'] ?></td>
                            <td><?php echo $compra['Producto'] ?></td>
                            <td><?php echo $compra['Cantidad'] ?></td>
                            <td><?php echo number_format($compra['Precio'], 2) ?></td>
                            <td><?php echo number_format($compra['Precio'] * $compra['Cantidad'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br/><br/>
            <h3>Inventario</h3>
            <hr/>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Inicio</th>
                        <th>Comprado</th>
                        <th>Vendido</th>
                        <th>Existencia</th>
                        <th>Costo Promedio</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos['inventarios'] as $compra): ?>
                        <tr>
                            <td><?php echo $compra['Producto'] ?></td>
                            <td><?php echo $compra['Inicio'] ?></td>
                            <td><?php echo $compra['Compra'] ?></td>
                            <td><?php echo $compra['Ventas'] ?></td>
                            <td><?php echo $compra['Existencia'] ?></td>
                            <td><?php echo number_format($compra['Precio'], 2) ?></td>
                            <td><?php echo number_format($compra['Precio'] * $compra['Existencia'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php endif; ?>
