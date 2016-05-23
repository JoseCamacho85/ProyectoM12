<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classRutaPOIDB
 *
 * @author Mazu
 */
class RutaPOIDB {


    
    public function insertRutaPOI($idPOI, $idRuta) {
        $rutaPOI = new RutaPOI($idPOI, $idRuta);

        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO rutapoi (id_ruta,id_poi) VALUES (:id_ruta,:id_poi)");
        $idPOI = $rutaPOI->getIdPOI();
        $idRuta = $rutaPOI->getIdRuta();

        $nonquery->bindParam(":id_ruta", $idRuta);
        $nonquery->bindParam(":id_poi", $idPOI);

        $con->executeNonQuery($nonquery);

        $id = $con->lastInsertId();

        return $id;
        $con = null; 
    }

}
