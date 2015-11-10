<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading panel-info">
                Nueva Venta
            </div>
            <div class="panel-body">
                <form class="form form-horizontal" method="POST" action="<?php echo url_for('venta/index') ?>">
                    <?php echo $form ?>
                    <hr/>
                    <button type="submit" class="btn btn-info">
                        Ingresar Detalle
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>