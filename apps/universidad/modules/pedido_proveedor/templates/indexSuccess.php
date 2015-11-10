<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading panel-success">
                Pedidos a Proveedores
            </div>
            <div class="panel-body">
                <form class="form form-horizontal" method="POST" action="<?php url_for('pedido_proveedor/index'); ?>">
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
           
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Proveedor</th>
                            <th>Usuario</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pedidos as $pedido): ?>
                            <tr>
                                <td><?php echo $pedido->getProveedor()->getNombre();?></td>
                                <td><?php echo $pedido->getUsuario()->getNombre();?></td>
                                <td><?php echo $pedido->getDescripcion();?></td>
                                <td><?php echo $pedido->getFecha();?></td>
                                <td><?php echo $pedido->getEstado()?></td>
                                <td>
                                    <a href="<?php echo url_for("pedido_proveedor/detalle").'/id/'.$pedido->getId();?>" class="btn btn-success" >Detalle</a>
                                    <?php if($pedido->getEstado()!=="Confirmado" && $pedido->getEstado()!=="Entregado"):?>
                                        <a href="<?php echo url_for("pedido_proveedor/confirmado").'/id/'.$pedido->getId();?>" class="btn btn-default" >Comfirmado</a>
                                        <a href="<?php echo url_for("pedido_proveedor/entregado").'/id/'.$pedido->getId();?>" class="btn btn-primary" >Entregado</a>
                                    <?php elseif($pedido->getEstado()!=="Entregado"): ?>
                                        <a href="<?php echo url_for("pedido_proveedor/entregado").'/id/'.$pedido->getId();?>" class="btn btn-primary" >Entregado</a>
                                    <?php endif;?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>