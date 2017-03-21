<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($seguridad_alerta_visitante, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <li class="sf_admin_action_anular_alerta">
      <?php echo link_to(__('Anular alerta', array(), 'messages'), 'alerta_visitante/anularAlerta?id='.$seguridad_alerta_visitante->getId(), array()) ?>
    </li>
  </ul>
</td>
