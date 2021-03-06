<?php

class TipoDB {

    /**
     * metodo para insertar tipos de poi a la base de datos
     * @param type $tipo tipo de poi
     * @return type
     */
    public function insertTipo($tipo) {
        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO tipo (nombre) " . "VALUES (:tipo)");

        $tipo = $tipo->getNombre();

        $nonquery->bindParam(":tipo", $tipo);

        $con->executeNonQuery($nonquery);

        $id = $con->lastInsertId();

        return $id;
        $con = null;
    }

}
