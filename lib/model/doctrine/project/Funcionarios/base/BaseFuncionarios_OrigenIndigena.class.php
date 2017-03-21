<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Funcionarios_OrigenIndigena', 'doctrine');

/**
 * BaseFuncionarios_OrigenIndigena
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $funcionario_id
 * @property integer $etnia_id
 * @property string $estado_etnia_id
 * @property string $nacimiento
 * @property timestamp $f_validado
 * @property integer $id_validado
 * @property string $status
 * @property integer $id_update
 * @property string $ip_update
 * @property Funcionarios_Funcionario $Funcionarios_Funcionario
 * @property Public_Etnia $Public_Etnia
 * 
 * @method integer                     getId()                       Returns the current record's "id" value
 * @method integer                     getFuncionarioId()            Returns the current record's "funcionario_id" value
 * @method integer                     getEtniaId()                  Returns the current record's "etnia_id" value
 * @method string                      getEstadoEtniaId()            Returns the current record's "estado_etnia_id" value
 * @method string                      getNacimiento()               Returns the current record's "nacimiento" value
 * @method timestamp                   getFValidado()                Returns the current record's "f_validado" value
 * @method integer                     getIdValidado()               Returns the current record's "id_validado" value
 * @method string                      getStatus()                   Returns the current record's "status" value
 * @method integer                     getIdUpdate()                 Returns the current record's "id_update" value
 * @method string                      getIpUpdate()                 Returns the current record's "ip_update" value
 * @method Funcionarios_Funcionario    getFuncionariosFuncionario()  Returns the current record's "Funcionarios_Funcionario" value
 * @method Public_Etnia                getPublicEtnia()              Returns the current record's "Public_Etnia" value
 * @method Funcionarios_OrigenIndigena setId()                       Sets the current record's "id" value
 * @method Funcionarios_OrigenIndigena setFuncionarioId()            Sets the current record's "funcionario_id" value
 * @method Funcionarios_OrigenIndigena setEtniaId()                  Sets the current record's "etnia_id" value
 * @method Funcionarios_OrigenIndigena setEstadoEtniaId()            Sets the current record's "estado_etnia_id" value
 * @method Funcionarios_OrigenIndigena setNacimiento()               Sets the current record's "nacimiento" value
 * @method Funcionarios_OrigenIndigena setFValidado()                Sets the current record's "f_validado" value
 * @method Funcionarios_OrigenIndigena setIdValidado()               Sets the current record's "id_validado" value
 * @method Funcionarios_OrigenIndigena setStatus()                   Sets the current record's "status" value
 * @method Funcionarios_OrigenIndigena setIdUpdate()                 Sets the current record's "id_update" value
 * @method Funcionarios_OrigenIndigena setIpUpdate()                 Sets the current record's "ip_update" value
 * @method Funcionarios_OrigenIndigena setFuncionariosFuncionario()  Sets the current record's "Funcionarios_Funcionario" value
 * @method Funcionarios_OrigenIndigena setPublicEtnia()              Sets the current record's "Public_Etnia" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFuncionarios_OrigenIndigena extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('funcionarios.origen_indigena');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'funcionarios.origen_indigena_id',
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
        $this->hasColumn('etnia_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('estado_etnia_id', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 2,
             ));
        $this->hasColumn('nacimiento', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('f_validado', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('id_validado', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
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
        $this->hasColumn('ip_update', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 40,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Funcionarios_Funcionario', array(
             'local' => 'funcionario_id',
             'foreign' => 'id'));

        $this->hasOne('Public_Etnia', array(
             'local' => 'etnia_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}