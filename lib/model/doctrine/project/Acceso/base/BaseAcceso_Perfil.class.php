<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Acceso_Perfil', 'doctrine');

/**
 * BaseAcceso_Perfil
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $status
 * @property integer $id_update
 * @property Doctrine_Collection $Acceso_ModuloPerfil
 * @property Doctrine_Collection $Acceso_UsuarioPerfil
 * @property Doctrine_Collection $Organigrama_Cargo
 * 
 * @method integer             getId()                   Returns the current record's "id" value
 * @method string              getNombre()               Returns the current record's "nombre" value
 * @method string              getDescripcion()          Returns the current record's "descripcion" value
 * @method string              getStatus()               Returns the current record's "status" value
 * @method integer             getIdUpdate()             Returns the current record's "id_update" value
 * @method Doctrine_Collection getAccesoModuloPerfil()   Returns the current record's "Acceso_ModuloPerfil" collection
 * @method Doctrine_Collection getAccesoUsuarioPerfil()  Returns the current record's "Acceso_UsuarioPerfil" collection
 * @method Doctrine_Collection getOrganigramaCargo()     Returns the current record's "Organigrama_Cargo" collection
 * @method Acceso_Perfil       setId()                   Sets the current record's "id" value
 * @method Acceso_Perfil       setNombre()               Sets the current record's "nombre" value
 * @method Acceso_Perfil       setDescripcion()          Sets the current record's "descripcion" value
 * @method Acceso_Perfil       setStatus()               Sets the current record's "status" value
 * @method Acceso_Perfil       setIdUpdate()             Sets the current record's "id_update" value
 * @method Acceso_Perfil       setAccesoModuloPerfil()   Sets the current record's "Acceso_ModuloPerfil" collection
 * @method Acceso_Perfil       setAccesoUsuarioPerfil()  Sets the current record's "Acceso_UsuarioPerfil" collection
 * @method Acceso_Perfil       setOrganigramaCargo()     Sets the current record's "Organigrama_Cargo" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAcceso_Perfil extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('acceso.perfil');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Acceso_ModuloPerfil', array(
             'local' => 'id',
             'foreign' => 'perfil_id'));

        $this->hasMany('Acceso_UsuarioPerfil', array(
             'local' => 'id',
             'foreign' => 'perfil_id'));

        $this->hasMany('Organigrama_Cargo', array(
             'local' => 'id',
             'foreign' => 'perfil_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}