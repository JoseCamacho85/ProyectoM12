<?php

class EntornoDB {

    public function insertEntorno($entorno) {
        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO entorno (nombre) ". "VALUES (:entorno)");

        $entorno = $entorno->getNombre();

        $nonquery->bindParam(":entorno", $entorno);

        $con->executeNonQuery($nonquery);

        $id = $con->lastInsertId();

        return $id;
        $con = null;
    }

}