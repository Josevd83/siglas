<?php

/**
 * Archivo_Documento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Archivo_Documento extends BaseArchivo_Documento
{
    public function save(Doctrine_Connection $conn = null)
    {   
        if($this->isNew()){
            $this->setExpedienteId(sfContext::getInstance()->getUser()->getAttribute('expediente_id'));
            if(!$this->getCorrelativo())
                $this->setCorrelativo('TMP-'.date('Y-m-d:h:i:s'));
            
            $this->setUsuarioValidadorId(0);
        }
        
        return parent::save($conn);
    }    
}
