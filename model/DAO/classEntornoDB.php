<?php

class EntornoDB {

    /**
     * metodo para insertar un entorno de poi a la base de datos
     * @param type $entorno nombre del entorno de poi
     * @return type
     */
    public function insertEntorno($entorno) {
        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO entorno (nombre) " . "VALUES (:entorno)");

        $entorno = $entorno->getNombre();

        $nonquery->bindParam(":entorno", $entorno);

        $con->executeNonQuery($nonquery);

        $id = $con->lastInsertId();

        return $id;
        $con = null;
    }

}
