<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Archivo_ExpedienteCuerpoDocumental', 'doctrine');

/**
 * BaseArchivo_ExpedienteCuerpoDocumental
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $expediente_id
 * @property integer $cuerpo_documental_id
 * @property integer $id_update
 * @property Archivo_Expediente $Archivo_Expediente
 * @property Archivo_CuerpoDocumental $Archivo_CuerpoDocumental
 * 
 * @method integer                            getId()                       Returns the current record's "id" value
 * @method integer                            getExpedienteId()             Returns the current record's "expediente_id" value
 * @method integer                            getCuerpoDocumentalId()       Returns the current record's "cuerpo_documental_id" value
 * @method integer                            getIdUpdate()                 Returns the current record's "id_update" value
 * @method Archivo_Expediente                 getArchivoExpediente()        Returns the current record's "Archivo_Expediente" value
 * @method Archivo_CuerpoDocumental           getArchivoCuerpoDocumental()  Returns the current record's "Archivo_CuerpoDocumental" value
 * @method Archivo_ExpedienteCuerpoDocumental setId()                       Sets the current record's "id" value
 * @method Archivo_ExpedienteCuerpoDocumental setExpedienteId()             Sets the current record's "expediente_id" value
 * @method Archivo_ExpedienteCuerpoDocumental setCuerpoDocumentalId()       Sets the current record's "cuerpo_documental_id" value
 * @method Archivo_ExpedienteCuerpoDocumental setIdUpdate()                 Sets the current record's "id_update" value
 * @method Archivo_ExpedienteCuerpoDocumental setArchivoExpediente()        Sets the current record's "Archivo_Expediente" value
 * @method Archivo_ExpedienteCuerpoDocumental setArchivoCuerpoDocumental()  Sets the current record's "Archivo_CuerpoDocumental" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArchivo_ExpedienteCuerpoDocumental extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('archivo.expediente_cuerpo_documental');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'archivo.expediente_cuerpo_documental_id',
             'length' => 4,
             ));
        $this->hasColumn('expediente_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('cuerpo_documental_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
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
        $this->hasOne('Archivo_Expediente', array(
             'local' => 'expediente_id',
             'foreign' => 'id'));

        $this->hasOne('Archivo_CuerpoDocumental', array(
             'local' => 'cuerpo_documental_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}