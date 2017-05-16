<?php

Class Usuario{
    
    var $idusuario;
    var $nombre;
    var $clave;


    function VerificaUsuario(){
        Conexion $oConn= new Conexion();
        
        
        if($oConn->conectar();)
            $db=$oConn->objcon;
        else
            return false;
        
        
        
        
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

