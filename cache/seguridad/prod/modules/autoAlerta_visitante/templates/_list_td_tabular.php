<td class="sf_admin_text sf_admin_list_td_ci">
  <?php echo $seguridad_alerta_visitante->getCi() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_descripcion">
  <?php echo $seguridad_alerta_visitante->getDescripcion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_status">
  <?php echo get_partial('alerta_visitante/status', array('type' => 'list', 'seguridad_alerta_visitante' => $seguridad_alerta_visitante)) ?>
</td>
