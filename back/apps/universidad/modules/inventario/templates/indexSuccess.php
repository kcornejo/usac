<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading panel-success">
                Ingreso a Inventario
            </div>
            <div class="panel-body">
                <form class="form form-horizontal" method="POST" action="<?php url_for('inventario/index'); ?>">
                    <?php echo $form ?>
                    <div class="form-actions">
                        <button class="btn btn-success">
                            <i class="fa fa-plus"></i>
                            Ingresar
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading panel-info">
                Ultimos 5 Ingresos
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Proveedor</th>
                            <th>Precio por Unidad</th>
                            <th>Cantidad Actual</th>
                            <th>Fecha de Ingreso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cinco as $fila): ?>
                            <tr>
                                <td><?php echo $fila->getProducto()->getDescripcion()?></td>
                                <td><?php echo $fila->getProveedor()->getNombre()?></td>
                                <td><?php echo $fila->getPrecioCompra()?></td>
                                <td><?php echo $fila->getCantidad()?></td>
                                <td><?php echo $fila->getUpdatedAt()?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>