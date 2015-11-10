<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Proceso de Fin de Día
            </div>
            <div class="panel-body">
                <form class='form form-horizontal' method='POST' action='<?php echo url_for("fin_dia/index") ?>'>
                    <?php echo $form ?>
                    <br/>
                    <div class='form-actions'>
                        <button class='btn btn-info'>
                            <i class='fa fa-search'></i>
                            Consultar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>