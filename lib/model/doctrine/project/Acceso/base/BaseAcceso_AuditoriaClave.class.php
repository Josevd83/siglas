<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Acceso_AuditoriaClave', 'doctrine');

/**
 * BaseAcceso_AuditoriaClave
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $usuario_id
 * @property string $clave
 * @property timestamp $fecha_cambio
 * @property Acceso_Usuario $Acceso_Usuario
 * 
 * @method integer               getId()             Returns the current record's "id" value
 * @method integer               getUsuarioId()      Returns the current record's "usuario_id" value
 * @method string                getClave()          Returns the current record's "clave" value
 * @method timestamp             getFechaCambio()    Returns the current record's "fecha_cambio" value
 * @method Acceso_Usuario        getAccesoUsuario()  Returns the current record's "Acceso_Usuario" value
 * @method Acceso_AuditoriaClave setId()             Sets the current record's "id" value
 * @method Acceso_AuditoriaClave setUsuarioId()      Sets the current record's "usuario_id" value
 * @method Acceso_AuditoriaClave setClave()          Sets the current record's "clave" value
 * @method Acceso_AuditoriaClave setFechaCambio()    Sets the current record's "fecha_cambio" value
 * @method Acceso_AuditoriaClave setAccesoUsuario()  Sets the current record's "Acceso_Usuario" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAcceso_AuditoriaClave extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('acceso.auditoria_clave');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'acceso.auditoria_clave_id',
             'length' => 4,
             ));
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('clave', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 100,
             ));
        $this->hasColumn('fecha_cambio', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Acceso_Usuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));
    }
}