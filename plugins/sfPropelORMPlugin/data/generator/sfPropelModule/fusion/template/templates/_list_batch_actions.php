<?php //if ($listActions = $this->configuration->getValue('list.batch_actions')): ?>
<!--    <div class="input-append">
        <select name="batch_action" class="form-control select2me" style="width:100%;">
            <option value="">[?php echo __('Choose an action', array(), 'sf_admin') ?]</option>
            <?php //foreach ((array) $listActions as $action => $params): ?>
                <?php //echo $this->addCredentialCondition('<option value="' . $action . '">[?php echo __(\'' . $params['label'] . '\', array(), \'sf_admin\') ?]</option>', $params) ?>

            <?php //endforeach; ?>
        </select>
        [?php $form = new BaseForm(); if ($form->isCSRFProtected()): ?]
        <input type="hidden" name="[?php echo $form->getCSRFFieldName() ?]" value="[?php echo $form->getCSRFToken() ?]" />
        [?php endif; ?]
        <input type="submit" class="btn btn-info" value="[?php echo __('go', array(), 'sf_admin') ?]" />
    </div>-->
<?php //endif; ?>
