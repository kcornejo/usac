<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_filter">
    <?php if ($form->hasGlobalErrors()): ?>
    <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <form action="<?php echo url_for('producto_collection', array('action' => 'filter')) ?>" class="form form-horizontal" method="post">
        <div class="form-body">
            <?php foreach ($configuration->getFormFilterFields($form) as $name => $field): ?>
            <?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?>
            <?php include_partial('producto/filters_field', array(
            'name'       => $name,
            'attributes' => $field->getConfig('attributes', array()),
            'label'      => $field->getConfig('label'),
            'help'       => $field->getConfig('help'),
            'form'       => $form,
            'field'      => $field,
            'class'      => 'sf_admin_form_row sf_admin_'.strtolower($field->getType()).' sf_admin_filter_field_'.$name,
            )) ?>
            <?php endforeach; ?>
        </div>
        <br/><br/><br/>
        <div class='form-actions'>
            <?php echo $form->renderHiddenFields() ?>
            <?php echo link_to(__('Reset', array(), 'sf_admin'), 'producto_collection', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post', 'class' => 'btn btn-success btn-gradient')) ?>
            <input class="btn btn-warning btn-gradient" type="submit" value="<?php echo __('Filter', array(), 'sf_admin') ?>" />
        </div>
    </form>
</div>
