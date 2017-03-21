<?php

/**
 * alerta_visitante module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage alerta_visitante
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAlerta_visitanteGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'seguridad_alerta_visitante' : 'seguridad_alerta_visitante_'.$action;
  }
}
