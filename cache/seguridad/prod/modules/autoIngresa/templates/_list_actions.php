<?php echo $helper->linkToNew(array(  'params' =>   array(  ),  'class_suffix' => 'new',  'label' => 'New',)) ?>
<li class="sf_admin_action_preingreso_visitantes">
  <?php echo link_to(__('Preingreso de visitantes', array(), 'messages'), 'ingresa/preingreso', array()) ?>
</li>
<li class="sf_admin_action_alerta_visitante">
  <?php echo link_to(__('Visitantes en alerta', array(), 'messages'), 'ingresa/alertaVisitante', array()) ?>
</li>
<li class="sf_admin_action_pases_ingreso">
  <?php echo link_to(__('Pases de ingreso', array(), 'messages'), 'ingresa/pasesIngreso', array()) ?>
</li>
