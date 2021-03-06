<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Vehiculos_Conductor', 'doctrine');

/**
 * BaseVehiculos_Conductor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $funcionario_id
 * @property string $status
 * @property integer $id_update
 * @property integer $id_create
 * @property string $ip_update
 * @property string $ip_create
 * @property Funcionarios_Funcionario $Funcionarios_Funcionario
 * 
 * @method integer                  getId()                       Returns the current record's "id" value
 * @method integer                  getFuncionarioId()            Returns the current record's "funcionario_id" value
 * @method string                   getStatus()                   Returns the current record's "status" value
 * @method integer                  getIdUpdate()                 Returns the current record's "id_update" value
 * @method integer                  getIdCreate()                 Returns the current record's "id_create" value
 * @method string                   getIpUpdate()                 Returns the current record's "ip_update" value
 * @method string                   getIpCreate()                 Returns the current record's "ip_create" value
 * @method Funcionarios_Funcionario getFuncionariosFuncionario()  Returns the current record's "Funcionarios_Funcionario" value
 * @method Vehiculos_Conductor      setId()                       Sets the current record's "id" value
 * @method Vehiculos_Conductor      setFuncionarioId()            Sets the current record's "funcionario_id" value
 * @method Vehiculos_Conductor      setStatus()                   Sets the current record's "status" value
 * @method Vehiculos_Conductor      setIdUpdate()                 Sets the current record's "id_update" value
 * @method Vehiculos_Conductor      setIdCreate()                 Sets the current record's "id_create" value
 * @method Vehiculos_Conductor      setIpUpdate()                 Sets the current record's "ip_update" value
 * @method Vehiculos_Conductor      setIpCreate()                 Sets the current record's "ip_create" value
 * @method Vehiculos_Conductor      setFuncionariosFuncionario()  Sets the current record's "Funcionarios_Funcionario" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVehiculos_Conductor extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vehiculos.conductor');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'vehiculos.conductor_id',
             'length' => 4,
             ));
        $this->hasColumn('funcionario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('status', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('id_update', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_create', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('ip_update', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 50,
             ));
        $this->hasColumn('ip_create', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Funcionarios_Funcionario', array(
             'local' => 'funcionario_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}