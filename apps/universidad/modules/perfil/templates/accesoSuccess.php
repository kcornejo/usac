<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading panel-info">
                Accesos
            </div>
            <div class="panel-body">
                <form class="form form-horizontal" method="POST" action="<?php echo url_for('perfil/acceso') . '?id=' . $id ?>">
                    <?php echo $form ?>
                    <hr/>
                    <button type="submit" class="btn btn-info">
                        <i class="fa fa-save"></i>
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>