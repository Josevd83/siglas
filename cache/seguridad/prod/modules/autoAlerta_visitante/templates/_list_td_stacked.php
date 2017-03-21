<td colspan="3">
  <?php echo __('%%ci%% - %%descripcion%% - %%status%%', array('%%ci%%' => $seguridad_alerta_visitante->getCi(), '%%descripcion%%' => $seguridad_alerta_visitante->getDescripcion(), '%%status%%' => get_partial('alerta_visitante/status', array('type' => 'list', 'seguridad_alerta_visitante' => $seguridad_alerta_visitante))), 'messages') ?>
</td>
