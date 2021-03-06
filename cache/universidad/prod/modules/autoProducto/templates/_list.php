<div class="no-pad">

    <div class="sf_admin_list">
        <?php if (!$pager->getNbResults()): ?>
        <p><?php echo __('No result', array(), 'sf_admin') ?></p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="active">
                                                    <th id="sf_admin_list_batch_actions"><input id="sf_admin_list_batch_checkbox" type="checkbox" onclick="checkAll();" /></th>
                                                <?php include_partial('producto/list_th_tabular', array('sort' => $sort)) ?>
                                                    <th id="sf_admin_list_th_actions"><?php echo __('Actions', array(), 'sf_admin') ?></th>
                                            </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan="10">
                <div class="row-fluid">
                    <div class="span6 pagination">
                        <?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?>
                        <?php if ($pager->haveToPaginate()): ?>
                        <?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?>
                        <?php endif; ?>

                    </div>
                    <div class="span6 float-right">
                        <div style="float:right;">
                            <?php if ($pager->haveToPaginate()): ?>
                            <?php include_partial('producto/pagination', array('pager' => $pager)) ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                </th>
                </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($pager->getResults() as $i => $producto): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?>
                    <tr class="sf_admin_row <?php echo $odd ?>">
                                                    <?php include_partial('producto/list_td_batch_actions', array('producto' => $producto, 'helper' => $helper)) ?>
                                                <?php include_partial('producto/list_td_tabular', array('producto' => $producto)) ?>
                                                    <?php include_partial('producto/list_td_actions', array('producto' => $producto, 'helper' => $helper)) ?>
                                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>


</div>
<script type="text/javascript">
                            /* <![CDATA[ */
                            function checkAll()
                            {
                                var boxes = document.getElementsByTagName('input');
                                for (var index = 0; index < boxes.length; index++) {
                                    box = boxes[index];
                                    if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox')
                                        box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked
                                }
                                return true;
                            }
                            /* ]]> */
</script>
