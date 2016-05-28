<?php

class RutaPOIDB {

    /**
     * metodo para insertar un poi en una ruta
     * @param type $idPOI poi que se inserta en la ruta
     * @param type $idRuta ruta donde se inserta el poi
     */
    public function insertRutaPOI($idPOI, $idRuta) {
        $rutaPOI = new RutaPOI($idPOI, $idRuta);

        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO rutapoi (id_ruta,id_poi) VALUES (:id_ruta,:id_poi)");

        $nonquery->bindParam(":id_ruta", $idRuta);
        $nonquery->bindParam(":id_poi", $idPOI);

        $con->executeNonQuery($nonquery);

        $con = null;
    }

}
