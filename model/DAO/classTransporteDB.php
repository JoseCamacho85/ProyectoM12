<?php

class TransporteDB {

    /**
     * metodo para insertar el transporte de poi en la base de datos
     * @param type $transporte transporte para acceder al poi
     * @return type
     */
    public function insertTransporte($transporte) {
        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO transporte (nombre) " . "VALUES (:transporte)");

        $transporte = $transporte->getNombre();

        $nonquery->bindParam(":transporte", $transporte);

        $con->executeNonQuery($nonquery);

        $id = $con->lastInsertId();

        return $id;
        $con = null;
    }

}
