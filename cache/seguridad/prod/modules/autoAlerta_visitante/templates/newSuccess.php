<?php use_helper('I18N', 'Date') ?>
<?php include_partial('alerta_visitante/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nuevo visitante en alerta', array(), 'messages') ?></h1>

  <?php include_partial('alerta_visitante/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('alerta_visitante/form_header', array('seguridad_alerta_visitante' => $seguridad_alerta_visitante, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('alerta_visitante/form', array('seguridad_alerta_visitante' => $seguridad_alerta_visitante, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('alerta_visitante/form_footer', array('seguridad_alerta_visitante' => $seguridad_alerta_visitante, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
