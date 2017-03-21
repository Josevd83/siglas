<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Organigrama_Cargo', 'doctrine');

/**
 * BaseOrganigrama_Cargo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $unidad_funcional_id
 * @property integer $unidad_administrativa_id
 * @property integer $padre_id
 * @property integer $codigo_nomina
 * @property integer $cargo_tipo_id
 * @property integer $cargo_condicion_id
 * @property integer $cargo_grado_id
 * @property string $descripcion
 * @property date $f_ingreso
 * @property date $f_retiro
 * @property string $motivo_retiro
 * @property integer $perfil_id
 * @property string $status
 * @property integer $id_update
 * @property Organigrama_Cargo $Organigrama_Cargo
 * @property Organigrama_CargoCondicion $Organigrama_CargoCondicion
 * @property Organigrama_CargoGrado $Organigrama_CargoGrado
 * @property Organigrama_CargoTipo $Organigrama_CargoTipo
 * @property Organigrama_Unidad $Organigrama_UnidadFuncional
 * @property Organigrama_Unidad $Organigrama_UnidadAdministrativa
 * @property Acceso_Perfil $Acceso_Perfil
 * @property Doctrine_Collection $Funcionarios_FuncionarioCargo
 * @property Doctrine_Collection $Organigrama_CargoPadre
 * @property Doctrine_Collection $Organigrama_TelefonoCargo
 * @property Doctrine_Collection $Correspondencia_RedireccionAutomatica
 * @property Doctrine_Collection $Correspondencia_VistobuenoGeneral
 * @property Doctrine_Collection $Correspondencia_Receptor
 * 
 * @method integer                    getId()                                    Returns the current record's "id" value
 * @method integer                    getUnidadFuncionalId()                     Returns the current record's "unidad_funcional_id" value
 * @method integer                    getUnidadAdministrativaId()                Returns the current record's "unidad_administrativa_id" value
 * @method integer                    getPadreId()                               Returns the current record's "padre_id" value
 * @method integer                    getCodigoNomina()                          Returns the current record's "codigo_nomina" value
 * @method integer                    getCargoTipoId()                           Returns the current record's "cargo_tipo_id" value
 * @method integer                    getCargoCondicionId()                      Returns the current record's "cargo_condicion_id" value
 * @method integer                    getCargoGradoId()                          Returns the current record's "cargo_grado_id" value
 * @method string                     getDescripcion()                           Returns the current record's "descripcion" value
 * @method date                       getFIngreso()                              Returns the current record's "f_ingreso" value
 * @method date                       getFRetiro()                               Returns the current record's "f_retiro" value
 * @method string                     getMotivoRetiro()                          Returns the current record's "motivo_retiro" value
 * @method integer                    getPerfilId()                              Returns the current record's "perfil_id" value
 * @method string                     getStatus()                                Returns the current record's "status" value
 * @method integer                    getIdUpdate()                              Returns the current record's "id_update" value
 * @method Organigrama_Cargo          getOrganigramaCargo()                      Returns the current record's "Organigrama_Cargo" value
 * @method Organigrama_CargoCondicion getOrganigramaCargoCondicion()             Returns the current record's "Organigrama_CargoCondicion" value
 * @method Organigrama_CargoGrado     getOrganigramaCargoGrado()                 Returns the current record's "Organigrama_CargoGrado" value
 * @method Organigrama_CargoTipo      getOrganigramaCargoTipo()                  Returns the current record's "Organigrama_CargoTipo" value
 * @method Organigrama_Unidad         getOrganigramaUnidadFuncional()            Returns the current record's "Organigrama_UnidadFuncional" value
 * @method Organigrama_Unidad         getOrganigramaUnidadAdministrativa()       Returns the current record's "Organigrama_UnidadAdministrativa" value
 * @method Acceso_Perfil              getAccesoPerfil()                          Returns the current record's "Acceso_Perfil" value
 * @method Doctrine_Collection        getFuncionariosFuncionarioCargo()          Returns the current record's "Funcionarios_FuncionarioCargo" collection
 * @method Doctrine_Collection        getOrganigramaCargoPadre()                 Returns the current record's "Organigrama_CargoPadre" collection
 * @method Doctrine_Collection        getOrganigramaTelefonoCargo()              Returns the current record's "Organigrama_TelefonoCargo" collection
 * @method Doctrine_Collection        getCorrespondenciaRedireccionAutomatica()  Returns the current record's "Correspondencia_RedireccionAutomatica" collection
 * @method Doctrine_Collection        getCorrespondenciaVistobuenoGeneral()      Returns the current record's "Correspondencia_VistobuenoGeneral" collection
 * @method Doctrine_Collection        getCorrespondenciaReceptor()               Returns the current record's "Correspondencia_Receptor" collection
 * @method Organigrama_Cargo          setId()                                    Sets the current record's "id" value
 * @method Organigrama_Cargo          setUnidadFuncionalId()                     Sets the current record's "unidad_funcional_id" value
 * @method Organigrama_Cargo          setUnidadAdministrativaId()                Sets the current record's "unidad_administrativa_id" value
 * @method Organigrama_Cargo          setPadreId()                               Sets the current record's "padre_id" value
 * @method Organigrama_Cargo          setCodigoNomina()                          Sets the current record's "codigo_nomina" value
 * @method Organigrama_Cargo          setCargoTipoId()                           Sets the current record's "cargo_tipo_id" value
 * @method Organigrama_Cargo          setCargoCondicionId()                      Sets the current record's "cargo_condicion_id" value
 * @method Organigrama_Cargo          setCargoGradoId()                          Sets the current record's "cargo_grado_id" value
 * @method Organigrama_Cargo          setDescripcion()                           Sets the current record's "descripcion" value
 * @method Organigrama_Cargo          setFIngreso()                              Sets the current record's "f_ingreso" value
 * @method Organigrama_Cargo          setFRetiro()                               Sets the current record's "f_retiro" value
 * @method Organigrama_Cargo          setMotivoRetiro()                          Sets the current record's "motivo_retiro" value
 * @method Organigrama_Cargo          setPerfilId()                              Sets the current record's "perfil_id" value
 * @method Organigrama_Cargo          setStatus()                                Sets the current record's "status" value
 * @method Organigrama_Cargo          setIdUpdate()                              Sets the current record's "id_update" value
 * @method Organigrama_Cargo          setOrganigramaCargo()                      Sets the current record's "Organigrama_Cargo" value
 * @method Organigrama_Cargo          setOrganigramaCargoCondicion()             Sets the current record's "Organigrama_CargoCondicion" value
 * @method Organigrama_Cargo          setOrganigramaCargoGrado()                 Sets the current record's "Organigrama_CargoGrado" value
 * @method Organigrama_Cargo          setOrganigramaCargoTipo()                  Sets the current record's "Organigrama_CargoTipo" value
 * @method Organigrama_Cargo          setOrganigramaUnidadFuncional()            Sets the current record's "Organigrama_UnidadFuncional" value
 * @method Organigrama_Cargo          setOrganigramaUnidadAdministrativa()       Sets the current record's "Organigrama_UnidadAdministrativa" value
 * @method Organigrama_Cargo          setAccesoPerfil()                          Sets the current record's "Acceso_Perfil" value
 * @method Organigrama_Cargo          setFuncionariosFuncionarioCargo()          Sets the current record's "Funcionarios_FuncionarioCargo" collection
 * @method Organigrama_Cargo          setOrganigramaCargoPadre()                 Sets the current record's "Organigrama_CargoPadre" collection
 * @method Organigrama_Cargo          setOrganigramaTelefonoCargo()              Sets the current record's "Organigrama_TelefonoCargo" collection
 * @method Organigrama_Cargo          setCorrespondenciaRedireccionAutomatica()  Sets the current record's "Correspondencia_RedireccionAutomatica" collection
 * @method Organigrama_Cargo          setCorrespondenciaVistobuenoGeneral()      Sets the current record's "Correspondencia_VistobuenoGeneral" collection
 * @method Organigrama_Cargo          setCorrespondenciaReceptor()               Sets the current record's "Correspondencia_Receptor" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOrganigrama_Cargo extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('organigrama.cargo');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'organigrama.cargo_id',
             'length' => 4,
             ));
        $this->hasColumn('unidad_funcional_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('unidad_administrativa_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('padre_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('codigo_nomina', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('cargo_tipo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('cargo_condicion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('cargo_grado_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('f_ingreso', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('f_retiro', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('motivo_retiro', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('perfil_id', 'integer', 4, array(
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Organigrama_Cargo', array(
             'local' => 'padre_id',
             'foreign' => 'id'));

        $this->hasOne('Organigrama_CargoCondicion', array(
             'local' => 'cargo_condicion_id',
             'foreign' => 'id'));

        $this->hasOne('Organigrama_CargoGrado', array(
             'local' => 'cargo_grado_id',
             'foreign' => 'id'));

        $this->hasOne('Organigrama_CargoTipo', array(
             'local' => 'cargo_tipo_id',
             'foreign' => 'id'));

        $this->hasOne('Organigrama_Unidad as Organigrama_UnidadFuncional', array(
             'local' => 'unidad_funcional_id',
             'foreign' => 'id'));

        $this->hasOne('Organigrama_Unidad as Organigrama_UnidadAdministrativa', array(
             'local' => 'unidad_administrativa_id',
             'foreign' => 'id'));

        $this->hasOne('Acceso_Perfil', array(
             'local' => 'perfil_id',
             'foreign' => 'id'));

        $this->hasMany('Funcionarios_FuncionarioCargo', array(
             'local' => 'id',
             'foreign' => 'cargo_id'));

        $this->hasMany('Organigrama_Cargo as Organigrama_CargoPadre', array(
             'local' => 'id',
             'foreign' => 'padre_id'));

        $this->hasMany('Organigrama_TelefonoCargo', array(
             'local' => 'id',
             'foreign' => 'cargo_id'));

        $this->hasMany('Correspondencia_RedireccionAutomatica', array(
             'local' => 'id',
             'foreign' => 'cargo_id'));

        $this->hasMany('Correspondencia_VistobuenoGeneral', array(
             'local' => 'id',
             'foreign' => 'funcionario_cargo_id'));

        $this->hasMany('Correspondencia_Receptor', array(
             'local' => 'id',
             'foreign' => 'cargo_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}