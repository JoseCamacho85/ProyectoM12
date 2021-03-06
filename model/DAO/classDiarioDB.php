<?php

class DiarioDB {

    /**
     * metodo para insertar un diario directamente a la base de datos
     * @param type $diario diario a insertar en la base de datos
     * @return type
     */
    public function insertDiario($diario) {

        $con = new DB();

        $nonquery = $con->prepare("INSERT INTO diario (nombre,descripcion,id_usuario) VALUES (:nombre,:descripcion,:id_usuario)");
        $nombre = $diario->getNombre();
        $descripcion = $diario->getDescripcion();
        $id_usuario = $diario->getId_Usuario();

        $nonquery->bindParam(":nombre", $nombre);
        $nonquery->bindParam(":descripcion", $descripcion);
        $nonquery->bindParam(":id_usuario", $id_usuario);

        $con->executeNonQuery($nonquery);

        $id = $con->lastInsertId();

        return $id;
        $con = null;
    }

}
