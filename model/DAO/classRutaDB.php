<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classRutaDB
 *
 * @author toni
 */
class RutaDB {
    public function insertRuta($ruta){
        $con = new Database();                 
        $nonquery = $con->prepare("INSERT INTO ruta (nombre,descripcion) "
                . "VALUES (:nombre,:descripcion)");
        $nombre=$ruta->getNombre();           
        $descripcion=$ruta->getDescripcion();
        
        $nonquery->bindParam(":nombre",$nombre);
        $nonquery->bindParam(":descripcion",$descripcion);
            
        $con->executeNonQuery($nonquery);
            
        $con=null;
    }
}
