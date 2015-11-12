<!--    <div class="input-append">
        <select name="batch_action" class="form-control select2me" style="width:100%;">
            <option value=""><?php echo __('Choose an action', array(), 'sf_admin') ?></option>
                            
                    </select>
        <?php $form = new BaseForm(); if ($form->isCSRFProtected()): ?>
        <input type="hidden" name="<?php echo $form->getCSRFFieldName() ?>" value="<?php echo $form->getCSRFToken() ?>" />
        <?php endif; ?>
        <input type="submit" class="btn btn-info" value="<?php echo __('go', array(), 'sf_admin') ?>" />
    </div>-->
