<?php use_helper('I18N', 'Date') ?>
<?php include_partial('producto/assets') ?>

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="icon-reorder"></i><?php echo __('Listado de Productos', array(), 'messages') ?></h3>
    </div>
    <div class="panel-body">

        
            <div class="tabbable portlet-tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-listado" data-toggle="tab">Listado</a></li>
                    <li><a href="#tab-filtro" data-toggle="tab">Filtro</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane" id="tab-filtro">
                        <br/>
                        <?php include_partial('producto/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
                    </div>
                    <div class="tab-pane active" id="tab-listado">
                        <br/>
                    

                    <div id="sf_admin_header">
                        <?php include_partial('producto/list_header', array('pager' => $pager)) ?>
                    </div>

                    <div id="sf_admin_content">
                                                    <form action="<?php echo url_for('producto_collection', array('action' => 'batch')) ?>" method="post">
                                                        <?php include_partial('producto/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
                            <ul class="sf_admin_actions unstyled inline">
                                <br/>
                                <div style='float:right'>
                                    <?php include_partial('producto/list_batch_actions', array('helper' => $helper)) ?>
                                </div>
                                <div style='float:left'>
                                    <?php include_partial('producto/list_actions', array('helper' => $helper)) ?>
                                </div>
                                <br/><br/>
                            </ul>
                                                        </form>
                                            </div>

                    <div id="sf_admin_footer">
                        <?php include_partial('producto/list_footer', array('pager' => $pager)) ?>
                    </div>
                                        </div>
                </div>
            </div>
            </div>
</div>