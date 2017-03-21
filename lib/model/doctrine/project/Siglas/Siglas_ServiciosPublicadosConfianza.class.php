<?php

/**
 * Siglas_ServiciosPublicadosConfianza
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Siglas_ServiciosPublicadosConfianza extends BaseSiglas_ServiciosPublicadosConfianza
{
    public function save(Doctrine_Connection $conn = null)
    {        
        if($this->isNew()) {
            $this->setNotificacion(false); 
        }
        
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $puerta=$_SERVER["REMOTE_ADDR"];
            $pc = gethostbyaddr($_SERVER["HTTP_X_FORWARDED_FOR"]);
        }else{
            $puerta='NINGUNA';
            $pc = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        }

        $agente = $_SERVER["HTTP_USER_AGENT"];

        // Detección del Sistema Operativo
        $so = "Otro";
        if(preg_match("/Win/i", $agente))$so = "Windows";
        elseif((preg_match("/Mac/i", $agente)) || (preg_match("/PPC/i", $agente))) $so = "Mac";
        elseif(preg_match("/Linux/i", $agente))$so = "Linux";
        elseif(preg_match("/FreeBSD/i", $agente))$so = "FreeBSD";
        elseif(preg_match("/SunOS/i", $agente))$so = "SunOS";
        elseif(preg_match("/IRIX/i", $agente))$so = "IRIX";
        elseif(preg_match("/BeOS/i", $agente))$so = "BeOS";
        elseif(preg_match("/OS\/2/i", $agente))$so = "OS/2";
        elseif(preg_match("/AIX/i", $agente))$so = "AIX";

        $this->setPuerta($puerta);
        $this->setSo($so);
        $this->setAgente($agente);
        $this->setPc($pc);
        
        return parent::save($conn);
    }  
}
