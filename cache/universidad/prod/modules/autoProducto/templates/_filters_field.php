<div class='row'>
    <div class="col-md-12">
        <div class="col-md-2">
            <?php if ($field->isPartial()): ?>
            <?php include_partial('producto/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
            <?php elseif ($field->isComponent()): ?>
            <?php include_component('producto', $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
            <?php else: ?>
            <?php echo $form[$name]->renderLabel($label) ?>
            <?php echo $form[$name]->renderError() ?>
        </div>
        <div class="col-md-8">
            <?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?>
            <?php if ($help || $help = $form[$name]->renderHelp()): ?>
            <div class="help"><?php echo __($help, array(), 'messages') ?></div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>