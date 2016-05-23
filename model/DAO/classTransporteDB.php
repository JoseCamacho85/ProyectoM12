<?php

class TransporteDB {

    public function insertTransporte($transporte) {
        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO transporte (nombre) ". "VALUES (:transporte)");

        $transporte = $transporte->getNombre();

        $nonquery->bindParam(":transporte", $transporte);

        $con->executeNonQuery($nonquery);

        $id = $con->lastInsertId();

        return $id;
        $con = null;
    }

}