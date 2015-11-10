<?php
$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$valor = 0;
foreach ($url as $fila) {
    if (is_numeric($fila)) {
        $valor = $fila;
    }
}
$imagen = null;
if ($valor) {
    $imagen = ProductoQuery::create()->findOneById($valor);
    if ($imagen) {
        $imagen = $imagen->getImagen();
    }
}
?>
<?php if (sfConfig::get('sf_upload_dir') .DIRECTORY_SEPARATOR. 'carga'.DIRECTORY_SEPARATOR . $imagen): ?>
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-9">
            <img src="<?php echo '/uploads/' . 'carga/' . $imagen ?>" style="width:100px"/>
        </div>
    </div>
<?php endif; ?>