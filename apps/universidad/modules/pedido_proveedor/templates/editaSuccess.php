<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading panel-success">
              

                
                Edita Detalle Pedidos a Proveedores
                
                <a href="<?php echo url_for('pedido_proveedor/detalle') . '/id/' . $id ; ?>" class="btn btn-primary  ">Regresar</a>
                
            </div>
            <div class="panel-body">
                <form class="form form-horizontal" method="POST" action="<?php url_for('detalle_proveedor/detalle') . '/id/' . $id . '/accion/add'; ?>">
                    <?php echo $form ?>
                    <div class="form-actions">
                        <button class="btn btn-success">
                            <i class="fa fa-plus"></i>
                            Modificar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>