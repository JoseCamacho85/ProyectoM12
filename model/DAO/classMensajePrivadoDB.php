<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classMensajePrivadoDB
 *
 * @author toni
 */
class classMensajePrivadoDB {
    public function insertMensajePrivado($MP){
        $con = new Database();                 
        $nonquery = $con->prepare("INSERT INTO diario (nombre,texto) "
                . "VALUES (:nombre,:texto)");
        $nombre=$MP->getNombre();           
        $descripcion=$diario->getDescripcion();
        
        $nonquery->bindParam(":nombre",$nombre);
        $nonquery->bindParam(":texto",$descripcion);
            
        $con->executeNonQuery($nonquery);
            
        $con=null;
    }
}
