<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Public_Mensajes', 'doctrine');

/**
 * BasePublic_Mensajes
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $conversacion
 * @property integer $funcionario_envia_id
 * @property integer $funcionario_recibe_id
 * @property string $contenido
 * @property string $nombre_externo
 * @property string $n_informe_progreso
 * @property string $tipo
 * @property string $status
 * @property integer $id_update
 * @property string $ip_update
 * @property integer $id_eliminado
 * @property Funcionarios_Funcionario $Funcionarios_FuncionarioEnvia
 * @property Funcionarios_Funcionario $Funcionarios_FuncionarioRecibe
 * @property Doctrine_Collection $Public_MensajesMasivos
 * 
 * @method integer                  getId()                             Returns the current record's "id" value
 * @method integer                  getConversacion()                   Returns the current record's "conversacion" value
 * @method integer                  getFuncionarioEnviaId()             Returns the current record's "funcionario_envia_id" value
 * @method integer                  getFuncionarioRecibeId()            Returns the current record's "funcionario_recibe_id" value
 * @method string                   getContenido()                      Returns the current record's "contenido" value
 * @method string                   getNombreExterno()                  Returns the current record's "nombre_externo" value
 * @method string                   getNInformeProgreso()               Returns the current record's "n_informe_progreso" value
 * @method string                   getTipo()                           Returns the current record's "tipo" value
 * @method string                   getStatus()                         Returns the current record's "status" value
 * @method integer                  getIdUpdate()                       Returns the current record's "id_update" value
 * @method string                   getIpUpdate()                       Returns the current record's "ip_update" value
 * @method integer                  getIdEliminado()                    Returns the current record's "id_eliminado" value
 * @method Funcionarios_Funcionario getFuncionariosFuncionarioEnvia()   Returns the current record's "Funcionarios_FuncionarioEnvia" value
 * @method Funcionarios_Funcionario getFuncionariosFuncionarioRecibe()  Returns the current record's "Funcionarios_FuncionarioRecibe" value
 * @method Doctrine_Collection      getPublicMensajesMasivos()          Returns the current record's "Public_MensajesMasivos" collection
 * @method Public_Mensajes          setId()                             Sets the current record's "id" value
 * @method Public_Mensajes          setConversacion()                   Sets the current record's "conversacion" value
 * @method Public_Mensajes          setFuncionarioEnviaId()             Sets the current record's "funcionario_envia_id" value
 * @method Public_Mensajes          setFuncionarioRecibeId()            Sets the current record's "funcionario_recibe_id" value
 * @method Public_Mensajes          setContenido()                      Sets the current record's "contenido" value
 * @method Public_Mensajes          setNombreExterno()                  Sets the current record's "nombre_externo" value
 * @method Public_Mensajes          setNInformeProgreso()               Sets the current record's "n_informe_progreso" value
 * @method Public_Mensajes          setTipo()                           Sets the current record's "tipo" value
 * @method Public_Mensajes          setStatus()                         Sets the current record's "status" value
 * @method Public_Mensajes          setIdUpdate()                       Sets the current record's "id_update" value
 * @method Public_Mensajes          setIpUpdate()                       Sets the current record's "ip_update" value
 * @method Public_Mensajes          setIdEliminado()                    Sets the current record's "id_eliminado" value
 * @method Public_Mensajes          setFuncionariosFuncionarioEnvia()   Sets the current record's "Funcionarios_FuncionarioEnvia" value
 * @method Public_Mensajes          setFuncionariosFuncionarioRecibe()  Sets the current record's "Funcionarios_FuncionarioRecibe" value
 * @method Public_Mensajes          setPublicMensajesMasivos()          Sets the current record's "Public_MensajesMasivos" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePublic_Mensajes extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.mensajes');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'public.mensajes_id',
             'length' => 4,
             ));
        $this->hasColumn('conversacion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('funcionario_envia_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('funcionario_recibe_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('contenido', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('nombre_externo', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('n_informe_progreso', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('tipo', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
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
        $this->hasColumn('ip_update', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('id_eliminado', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Funcionarios_Funcionario as Funcionarios_FuncionarioEnvia', array(
             'local' => 'funcionario_envia_id',
             'foreign' => 'id'));

        $this->hasOne('Funcionarios_Funcionario as Funcionarios_FuncionarioRecibe', array(
             'local' => 'funcionario_recibe_id',
             'foreign' => 'id'));

        $this->hasMany('Public_MensajesMasivos', array(
             'local' => 'id',
             'foreign' => 'mensajes_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}