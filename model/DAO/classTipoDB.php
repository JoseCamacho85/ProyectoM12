<?php

class TipoDB {

    public function insertTipo($tipo) {
        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO tipo (nombre) ". "VALUES (:tipo)");

        $tipo = $tipo->getNombre();

        $nonquery->bindParam(":tipo", $tipo);

        $con->executeNonQuery($nonquery);

        $id = $this->$con->lastInsertId();

        return $id;
        $con = null;
    }

}