<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading panel-info">
                Reporte
            </div>
            <div class="panel-body">
                <form class="form form-horizontal" method="POST" action="<?php echo url_for('reporte/index') ?>">
                    <?php echo $form ?>
                    <hr/>
                    <span>En los reportes <b>Estado Actual de Producto</b> y el <b>Productos por Debajo de Minimo</b> no se considera las fechas.</span>
                    <hr/>
                    <button type="submit" class="btn btn-info" name="consultar">
                        <i class="fa fa-search"></i>
                        Consultar
                    </button>
                    <button type="submit" class="btn btn-danger" name="pdf">
                        <i class="fa fa-print"></i>
                        PDF
                    </button>
                </form>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading panel-info">
                    Reporte Detalle
                </div>
                <div class="panel-body">
                    <?php echo html_entity_decode($html) ?>
                </div>
            </div>
        </div>
    </div>
</div>