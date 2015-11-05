[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

[?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]
 
<div class="panel panel-piluku">
    <div class="panel-heading bg-yellow2">
        <h3 class='panel-title'>[?php echo <?php echo $this->getI18NString('edit.title') ?> ?]</h3>
    </div>
    <div class="panel-body">

        <div id="sf_admin_header">
            [?php include_partial('<?php echo $this->getModuleName() ?>/form_header', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration)) ?]
        </div>

        <div id="sf_admin_content">
            [?php include_partial('<?php echo $this->getModuleName() ?>/form', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]
        </div>

        <div id="sf_admin_footer">
            [?php include_partial('<?php echo $this->getModuleName() ?>/form_footer', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration)) ?]
        </div>
    </div>
</div>
