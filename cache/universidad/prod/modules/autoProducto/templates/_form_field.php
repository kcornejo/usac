<div class="form-group">
    <?php if ($field->isPartial()): ?>
    <?php include_partial('producto/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
    <?php elseif ($field->isComponent()): ?>
    <?php include_component('producto', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
    <?php else: ?>
<!--    <div class="<?php echo $class ?><?php $form[$name]->hasError() and print ' errors' ?>">-->


        <label class="col-sm-2 control-label" >
         <?php echo $form[$name]->renderLabel($label, array('class'=>'control-label')) ?>
        </label> 

              <div class="col-sm-8 <?php $form[$name]->hasError() and print 'has-error' ?> ">
                       <?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?>
        <?php if ($help): ?>
        <span class="help-block"><?php echo __($help, array(), 'messages') ?></span>
        <?php elseif ($help = $form[$name]->renderHelp()): ?>
        <span class="help-block"><?php echo $help ?></span>
        <?php endif; ?>
                        <label for="<?php echo $form[$name]->renderId()   ?>" ><span></span></label>     <span class="help-block form-error"><?php echo $form[$name]->renderError() ?></span>
       
            </div>
<!--    </div>-->
    <?php endif; ?>
</div>


