<td colspan="4">
  <?php echo __('%%visitante%% - %%destino%% - %%estancia%% - %%equipos%%', array('%%visitante%%' => get_partial('ingresa/visitante', array('type' => 'list', 'seguridad_ingreso' => $seguridad_ingreso)), '%%destino%%' => get_partial('ingresa/destino', array('type' => 'list', 'seguridad_ingreso' => $seguridad_ingreso)), '%%estancia%%' => get_partial('ingresa/estancia', array('type' => 'list', 'seguridad_ingreso' => $seguridad_ingreso)), '%%equipos%%' => get_partial('ingresa/equipos', array('type' => 'list', 'seguridad_ingreso' => $seguridad_ingreso))), 'messages') ?>
</td>
