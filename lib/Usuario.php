<?php

Class Usuario{
    
    var $idusuario;
    var $nombre;
    var $clave;


    function VerificaUsuarioClave(){
        $oConn= new Conexion();
        
        
        if($oConn->conectar())
            $db=$oConn->objcon;
        else
            return false;
        
        $clavemd5=  md5($this->clave);
        
        
        $sql="SELECT * FROM acceso WHERE nomusuario='$this->nombre' ";
        
        echo $sql;
        $resultado=$db->query($sql);
        
        if($resultado->num_rows>=1)
            return TRUE;
        else
            return FALSE;        
        
        
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

