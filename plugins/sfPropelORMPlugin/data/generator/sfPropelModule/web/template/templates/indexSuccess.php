[?php use_helper('I18N', 'Date') ?]

[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

[?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]
<div class="grid simple horizontal green">
    <div class="grid-title">
        <i class="icon-reorder"></i>[?php echo <?php echo $this->getI18NString('list.title') ?> ?]
    </div>
    <div class="grid-body">

        <?php if ($this->configuration->hasFilterForm()): ?>

            <div class="tabbable portlet-tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-listado" data-toggle="tab">Listado</a></li>
                    <li><a href="#tab-filtro" data-toggle="tab">Filtro</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane" id="tab-filtro">
                        [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)) ?]
                    </div>
                    <div class="tab-pane active" id="tab-listado">
                    <?php endif; ?>


                    <div id="sf_admin_header">
                        [?php include_partial('<?php echo $this->getModuleName() ?>/list_header', array('pager' => $pager)) ?]
                    </div>

                    <div id="sf_admin_content">
                        <?php if ($this->configuration->getValue('list.batch_actions')): ?>
                            <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]" method="post">
                            <?php endif; ?>
                            [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?]
                            <div class="row">
                                 <div class="col-md-6">
                                    [?php include_partial('<?php echo $this->getModuleName() ?>/list_actions', array('helper' => $helper)) ?]
                                </div>
                                <div class="col-md-6">
                                    [?php include_partial('<?php echo $this->getModuleName() ?>/list_batch_actions', array('helper' => $helper)) ?]
                                </div>
                            </div>
                            <?php if ($this->configuration->getValue('list.batch_actions')): ?>
                            </form>
                        <?php endif; ?>
                    </div>

                    <div id="sf_admin_footer">
                        [?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)) ?]
                    </div>
                    <?php if ($this->configuration->hasFilterForm()): ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>