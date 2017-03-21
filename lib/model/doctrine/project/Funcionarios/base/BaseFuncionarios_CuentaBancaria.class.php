<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Funcionarios_CuentaBancaria', 'doctrine');

/**
 * BaseFuncionarios_CuentaBancaria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $funcionario_id
 * @property integer $banco_id
 * @property string $tipo
 * @property string $n_cuenta
 * @property timestamp $f_validado
 * @property integer $id_validado
 * @property string $status
 * @property integer $id_update
 * @property string $ip_update
 * @property string $proteccion
 * @property Funcionarios_Funcionario $Funcionarios_Funcionario
 * @property Public_Banco $Public_Banco
 * 
 * @method integer                     getId()                       Returns the current record's "id" value
 * @method integer                     getFuncionarioId()            Returns the current record's "funcionario_id" value
 * @method integer                     getBancoId()                  Returns the current record's "banco_id" value
 * @method string                      getTipo()                     Returns the current record's "tipo" value
 * @method string                      getNCuenta()                  Returns the current record's "n_cuenta" value
 * @method timestamp                   getFValidado()                Returns the current record's "f_validado" value
 * @method integer                     getIdValidado()               Returns the current record's "id_validado" value
 * @method string                      getStatus()                   Returns the current record's "status" value
 * @method integer                     getIdUpdate()                 Returns the current record's "id_update" value
 * @method string                      getIpUpdate()                 Returns the current record's "ip_update" value
 * @method string                      getProteccion()               Returns the current record's "proteccion" value
 * @method Funcionarios_Funcionario    getFuncionariosFuncionario()  Returns the current record's "Funcionarios_Funcionario" value
 * @method Public_Banco                getPublicBanco()              Returns the current record's "Public_Banco" value
 * @method Funcionarios_CuentaBancaria setId()                       Sets the current record's "id" value
 * @method Funcionarios_CuentaBancaria setFuncionarioId()            Sets the current record's "funcionario_id" value
 * @method Funcionarios_CuentaBancaria setBancoId()                  Sets the current record's "banco_id" value
 * @method Funcionarios_CuentaBancaria setTipo()                     Sets the current record's "tipo" value
 * @method Funcionarios_CuentaBancaria setNCuenta()                  Sets the current record's "n_cuenta" value
 * @method Funcionarios_CuentaBancaria setFValidado()                Sets the current record's "f_validado" value
 * @method Funcionarios_CuentaBancaria setIdValidado()               Sets the current record's "id_validado" value
 * @method Funcionarios_CuentaBancaria setStatus()                   Sets the current record's "status" value
 * @method Funcionarios_CuentaBancaria setIdUpdate()                 Sets the current record's "id_update" value
 * @method Funcionarios_CuentaBancaria setIpUpdate()                 Sets the current record's "ip_update" value
 * @method Funcionarios_CuentaBancaria setProteccion()               Sets the current record's "proteccion" value
 * @method Funcionarios_CuentaBancaria setFuncionariosFuncionario()  Sets the current record's "Funcionarios_Funcionario" value
 * @method Funcionarios_CuentaBancaria setPublicBanco()              Sets the current record's "Public_Banco" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFuncionarios_CuentaBancaria extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('funcionarios.cuenta_bancaria');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'funcionarios.cuenta_bancaria_id',
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
        $this->hasColumn('banco_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('tipo', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 50,
             ));
        $this->hasColumn('n_cuenta', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 255,
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
        $this->hasColumn('proteccion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Funcionarios_Funcionario', array(
             'local' => 'funcionario_id',
             'foreign' => 'id'));

        $this->hasOne('Public_Banco', array(
             'local' => 'banco_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}