<div class="row">
    <div class="col-md-12">
        <?php if($estado!=="Entregado"):?>
        <div class="panel">
            <div class="panel-heading panel-success">
                
                Detalle Pedidos a Proveedores
                
                
                <a href="<?php echo url_for('pedido_proveedor/index'); ?>" class="btn btn-primary">Regresar</a>
            </div>
            <div class="panel-body">
                <form class="form form-horizontal" method="POST" action="<?php url_for('detalle_proveedor/detalle').'/id/'.$id.'/accion/add'; ?>">
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
        <?php endif;?>
        <div class="panel">
            <?php if($estado=="Entregado"):?>
           <div class="panel-heading panel-success">
                
                Detalle Pedidos a Proveedores
                
                
                <a href="<?php echo url_for('pedido_proveedor/index'); ?>" class="btn btn-primary">Regresar</a>
            </div>
            <?php endif;?>
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <?php if($estado!=="Entregado"):?>
                            <th>Accion</th>
                            <?php endif;?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($detalles as $detalle): ?>
                            <tr>
                                <td><?php echo $detalle->getProducto()->getDescripcion();?></td>
                                <td><?php echo $detalle->getCantidad();?></td>
                                <td><?php echo $detalle->getPrecio();?></td>
                                <?php if($estado!=="Entregado"):?>
                                <td><a href="<?php echo url_for("pedido_proveedor/detalle").'/id/'.$id.'/accion/elimina/det/'.$detalle->getId();?>" class="btn btn-danger" >Eliminar</a>
                                    <a href="<?php echo url_for("pedido_proveedor/edita").'/id/'.$id.'/accion/edita/det/'.$detalle->getId()?>" class="btn btn-success" >Editar</a></td>
                                <?php endif;?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>