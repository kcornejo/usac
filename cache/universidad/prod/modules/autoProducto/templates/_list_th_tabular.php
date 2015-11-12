<?php slot('sf_admin.current_header') ?>
<th class="   sf_admin_text sf_admin_list_th_descripcion">

      <?php if ('descripcion' == $sort[0]): ?>
    <?php echo link_to(__('Descripcion', array(), 'messages'), '@producto', array('query_string' => 'sort=descripcion&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
       <?php echo link_to(__('<span class="primary-info"> Descripcion</span>', array(), 'messages'), '@producto', array('query_string' => 'sort=descripcion&sort_type=asc')) ?>    
  <?php endif; ?>

</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="   sf_admin_text sf_admin_list_th_marca">

      <span class="primary-info">   <?php echo __('Marca', array(), 'messages') ?></span>

</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="   sf_admin_text sf_admin_list_th_foto">

      <span class="primary-info">   <?php echo __('Foto', array(), 'messages') ?></span>

</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="   sf_admin_text sf_admin_list_th_tipo_producto">

      <span class="primary-info">   <?php echo __('Tipo producto', array(), 'messages') ?></span>

</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="   sf_admin_text sf_admin_list_th_tipo_presentacion">

      <span class="primary-info">   <?php echo __('Tipo presentacion', array(), 'messages') ?></span>

</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="   sf_admin_text sf_admin_list_th_cantidad_minima">

      <?php if ('cantidad_minima' == $sort[0]): ?>
    <?php echo link_to(__('Existencia Minima', array(), 'messages'), '@producto', array('query_string' => 'sort=cantidad_minima&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
       <?php echo link_to(__('<span class="primary-info"> Existencia Minima</span>', array(), 'messages'), '@producto', array('query_string' => 'sort=cantidad_minima&sort_type=asc')) ?>    
  <?php endif; ?>

</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="   sf_admin_text sf_admin_list_th_costo">

      <?php if ('costo' == $sort[0]): ?>
    <?php echo link_to(__('Costo', array(), 'messages'), '@producto', array('query_string' => 'sort=costo&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
       <?php echo link_to(__('<span class="primary-info"> Costo</span>', array(), 'messages'), '@producto', array('query_string' => 'sort=costo&sort_type=asc')) ?>    
  <?php endif; ?>

</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="   sf_admin_text sf_admin_list_th_precio">

      <?php if ('precio' == $sort[0]): ?>
    <?php echo link_to(__('Precio', array(), 'messages'), '@producto', array('query_string' => 'sort=precio&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
       <?php echo link_to(__('<span class="primary-info"> Precio</span>', array(), 'messages'), '@producto', array('query_string' => 'sort=precio&sort_type=asc')) ?>    
  <?php endif; ?>

</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>