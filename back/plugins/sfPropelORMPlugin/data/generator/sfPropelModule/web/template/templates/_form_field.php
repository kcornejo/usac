<!--<div class="control-group [?php $form[$name]->hasError() and print ' error' ?]">-->
[?php if ($field->isPartial()): ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
[?php include_component('<?php echo $this->getModuleName() ?>', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <div class="[?php echo $class ?][?php $form[$name]->hasError() and print ' errors' ?]">
            <div class="form-label">
                [?php echo $form[$name]->renderLabel($label, array('class'=>'control-label')) ?]
            </div>
            <div class="controls">
                [?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?]
            </div>
            [?php if ($help): ?]
            <span class="help">[?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]</span>
            [?php elseif ($help = $form[$name]->renderHelp()): ?]
            <span class="help">[?php echo $help ?]</span>
            [?php endif; ?]
            <span class="error has-error">
                [?php echo $form[$name]->renderError() ?]
            </span>
        </div>
    </div>
</div>
[?php endif; ?]
<!--</div>-->