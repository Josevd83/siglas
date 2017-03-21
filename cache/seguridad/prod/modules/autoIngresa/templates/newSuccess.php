<?php use_helper('I18N', 'Date') ?>
<?php include_partial('ingresa/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nueva visita', array(), 'messages') ?></h1>

  <?php include_partial('ingresa/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('ingresa/form_header', array('seguridad_ingreso' => $seguridad_ingreso, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('ingresa/form', array('seguridad_ingreso' => $seguridad_ingreso, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('ingresa/form_footer', array('seguridad_ingreso' => $seguridad_ingreso, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
