<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading panel-info">
                Facturas Activas
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cliente</th>
                            <th>Medio de Pago</th>
                            <th>Fecha de Creacion</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $contador = 1; ?>
                        <?php foreach ($facturas as $factura): ?>
                            <tr>
                                <td><?php echo $contador ?></td>
                                <td><?php echo $factura->getCliente()->getNombre() ?></td>
                                <td><?php echo $factura->getTipoPago()->getNombre() ?></td>
                                <td><?php echo $factura->getCreatedAt() ?></td>
                                <td>
                                    <a class="btn btn-info " href="<?php echo url_for('venta/detalle') . "?id=" . $factura->getId() ?>">
                                        Continuar con Factura
                                    </a>
                                    <a class="btn btn-danger " href="<?php echo url_for('venta/eliminar') . "?id=" . $factura->getId() ?>">
                                        Eliminar Factura
                                    </a>
                                </td>
                            </tr>
                            <?php $contador++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>