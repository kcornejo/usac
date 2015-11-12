<td class="sf_admin_text sf_admin_list_td_descripcion">
  <?php echo $producto->getDescripcion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_marca">
  <?php echo $producto->getMarca() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_foto">
  <?php echo get_partial('producto/foto', array('type' => 'list', 'producto' => $producto)) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tipo_producto">
  <?php echo $producto->getTipoProducto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tipo_presentacion">
  <?php echo $producto->getTipoPresentacion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cantidad_minima">
  <?php echo $producto->getCantidadMinima() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_costo">
  <?php echo $producto->getCosto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_precio">
  <?php echo $producto->getPrecio() ?>
</td>
