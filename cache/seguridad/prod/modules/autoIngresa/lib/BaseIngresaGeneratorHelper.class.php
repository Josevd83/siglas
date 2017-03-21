<?php

/**
 * ingresa module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage ingresa
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseIngresaGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'seguridad_ingreso' : 'seguridad_ingreso_'.$action;
  }
}
