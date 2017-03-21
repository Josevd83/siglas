<td class="sf_admin_text sf_admin_list_td_visitante">
  <?php echo get_partial('ingresa/visitante', array('type' => 'list', 'seguridad_ingreso' => $seguridad_ingreso)) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_destino">
  <?php echo get_partial('ingresa/destino', array('type' => 'list', 'seguridad_ingreso' => $seguridad_ingreso)) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_estancia">
  <?php echo get_partial('ingresa/estancia', array('type' => 'list', 'seguridad_ingreso' => $seguridad_ingreso)) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_equipos">
  <?php echo get_partial('ingresa/equipos', array('type' => 'list', 'seguridad_ingreso' => $seguridad_ingreso)) ?>
</td>
