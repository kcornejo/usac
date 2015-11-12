<?php use_helper('I18N', 'Date') ?>
<?php include_partial('producto/assets') ?>

<div class="panel panel-success">
    <div class="panel-heading bg-green2">
        <h3 class='panel-title'><?php echo __('Nuevo Producto', array(), 'messages') ?></h3>
    </div>
    <div class="panel-body">

        <div id="sf_admin_header">
            <?php include_partial('producto/form_header', array('producto' => $producto, 'form' => $form, 'configuration' => $configuration)) ?>
        </div>

        <div id="sf_admin_content">
            <?php include_partial('producto/form', array('producto' => $producto, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
        </div>

        <div id="sf_admin_footer">
            <?php include_partial('producto/form_footer', array('producto' => $producto, 'form' => $form, 'configuration' => $configuration)) ?>
        </div>
    </div>
</div>
