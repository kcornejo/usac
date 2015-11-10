<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Bitacora de Cambios
            </div>
            <div class="panel-body">
                <form class="form form-horizontal" method="POST" action="<?php echo url_for('bitacora_cambios/index') ?>">
                    <?php echo $form ?>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-search"></i>
                            Consultar
                        </button>
                    </div>
                </form>
                <hr/>
                <?php if (sizeof($datos) > 0): ?> 
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tabla</th>
                                    <th>Descripcion</th>
                                    <th>Direccion</th>
                                    <th>Usuario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $contador = 1; ?>
                                <?php foreach ($datos as $dato): ?>
                                    <tr>
                                        <td><?php echo $contador ?></td>
                                        <td><?php echo $dato->getModelo() ?></td>
                                        <td><?php echo $dato->getDescripcion() ?></td>
                                        <td><?php echo $dato->getIp() ?></td>
                                        <td><?php echo $dato->getCreatedBy() ?></td>
                                    </tr>
                                    <?php $contador++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>