<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading yellow">
                Cambio de Clave
            </div>
            <div class="panel-body">
                <h3>Clave Nueva</h3>
                <hr/>
                <form class="form form-horizontal" method="POST" action="<?php echo url_for('usuario/clave') . '?id=' . $id ?>">
                    <?php echo $form ?>
                    <br/>
                    <div class="form-actions">
                        <button class="btn btn-info" type="submit">
                            <i class="fa fa-key"></i>
                            Cambiar Clave
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>