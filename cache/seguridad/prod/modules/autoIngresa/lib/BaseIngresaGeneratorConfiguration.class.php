<?php

/**
 * ingresa module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage ingresa
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseIngresaGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array(  '_save' =>   array(  ),);
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  'salida' =>   array(    'label' => 'Registrar Salida',    'action' => 'registrarSalida',  ),);
  }

  public function getListActions()
  {
    return array(  '_new' =>   array(  ),  'preingreso_visitantes' =>   array(    'label' => 'Preingreso de visitantes',    'action' => 'preingreso',  ),  'alerta_visitante' =>   array(    'label' => 'Visitantes en alerta',    'action' => 'alertaVisitante',  ),  'pases_ingreso' =>   array(    'label' => 'Pases de ingreso',    'action' => 'pasesIngreso',  ),);
  }

  public function getListBatchActions()
  {
    return array();
  }

  public function getListParams()
  {
    return '%%_visitante%% - %%_destino%% - %%_estancia%% - %%_equipos%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Listados de Visitantes';
  }

  public function getEditTitle()
  {
    return 'Edit Ingresa';
  }

  public function getNewTitle()
  {
    return 'Nueva visita';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'persona_id',  1 => 'unidad_id',  2 => 'funcionario_id',  3 => 'llave_ingreso_id',  4 => 'f_ingreso',  5 => 'f_egreso',  6 => 'motivo_id',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array(  'Visitante' =>   array(    0 => '_visitante_form',  ),  'Destino y motivo' =>   array(    0 => '_destino_form',  ),  'Estancia' =>   array(    0 => '_estancia_form',  ),  'Equipos Personales' =>   array(    0 => '_equipos_form',  ),);
  }

  public function getListDisplay()
  {
    return array(  0 => '_visitante',  1 => '_destino',  2 => '_estancia',  3 => '_equipos',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'persona_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'preingreso_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'imagen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'unidad_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'funcionario_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'llave_ingreso_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'N° de pase',),
      'f_ingreso' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'f_egreso' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'motivo_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'motivo_visita' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'registrador_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'despachador_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_update' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'ip_update' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'persona_id' => array(),
      'preingreso_id' => array(),
      'imagen' => array(),
      'unidad_id' => array(),
      'funcionario_id' => array(),
      'llave_ingreso_id' => array(),
      'f_ingreso' => array(),
      'f_egreso' => array(),
      'motivo_id' => array(),
      'motivo_visita' => array(),
      'registrador_id' => array(),
      'despachador_id' => array(),
      'status' => array(),
      'id_update' => array(),
      'ip_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'destino' => array(  'label' => 'Destino y motivo',),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'persona_id' => array(),
      'preingreso_id' => array(),
      'imagen' => array(),
      'unidad_id' => array(),
      'funcionario_id' => array(),
      'llave_ingreso_id' => array(),
      'f_ingreso' => array(),
      'f_egreso' => array(),
      'motivo_id' => array(),
      'motivo_visita' => array(),
      'registrador_id' => array(),
      'despachador_id' => array(),
      'status' => array(),
      'id_update' => array(),
      'ip_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'persona_id' => array(),
      'preingreso_id' => array(),
      'imagen' => array(),
      'unidad_id' => array(),
      'funcionario_id' => array(),
      'llave_ingreso_id' => array(),
      'f_ingreso' => array(),
      'f_egreso' => array(),
      'motivo_id' => array(),
      'motivo_visita' => array(),
      'registrador_id' => array(),
      'despachador_id' => array(),
      'status' => array(),
      'id_update' => array(),
      'ip_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'persona_id' => array(),
      'preingreso_id' => array(),
      'imagen' => array(),
      'unidad_id' => array(),
      'funcionario_id' => array(),
      'llave_ingreso_id' => array(),
      'f_ingreso' => array(),
      'f_egreso' => array(),
      'motivo_id' => array(),
      'motivo_visita' => array(),
      'registrador_id' => array(),
      'despachador_id' => array(),
      'status' => array(),
      'id_update' => array(),
      'ip_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'persona_id' => array(),
      'preingreso_id' => array(),
      'imagen' => array(),
      'unidad_id' => array(),
      'funcionario_id' => array(),
      'llave_ingreso_id' => array(),
      'f_ingreso' => array(),
      'f_egreso' => array(),
      'motivo_id' => array(),
      'motivo_visita' => array(),
      'registrador_id' => array(),
      'despachador_id' => array(),
      'status' => array(),
      'id_update' => array(),
      'ip_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'Seguridad_IngresoForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'Seguridad_IngresoFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 50;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return 'innerList';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
