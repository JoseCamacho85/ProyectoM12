<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classPOIDB
 *
 * @author Mazu
 */
class POIDB {
    public function insertPOI($POI){

        $con = new Database();                 
        $nonquery = $con->prepare("INSERT INTO POI (name,hours,theme) "
                . "VALUES (:nombre,:foto,:descripcion,:url,:precio,:horario)");
        $nombre=$POI->getNombre();           
        $foto=$POI->getFoto();
        $descripcion->getDescripcion();
        $url=$POI->getUrl();
        $precio=$POI->getPrecio();
        $horario=$POI->getHoriario();
        
        $nonquery->bindParam(":nombre",$nombre);
        $nonquery->bindParam(":foto",$foto);
        $nonquery->bindParam(":descripcion",$descripcion);
        $nonquery->bindParam(":url",$url);
        $nonquery->bindParam(":precio",$precio);
        $nonquery->bindParam(":horario",$horario);
            
        $con->executeNonQuery($nonquery);
            
        $con=null;
    }
}
