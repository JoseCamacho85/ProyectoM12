<?php

class RutaDB {

    /**
     * metodo para insertar rutas a la base de datos
     * @param type $ruta ruta a insertar a la base de datos
     * @return type
     */
    public function insertRuta($ruta) {
        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO ruta (nombre,descripcion, id_usuario) "
                . "VALUES (:nombre,:descripcion,:id_usuario)");
        $nombre = $ruta->getNombre();
        $descripcion = $ruta->getDescripcion();
        $id_usuario = $ruta->getUsuario();

        $nonquery->bindParam(":nombre", $nombre);
        $nonquery->bindParam(":descripcion", $descripcion);
        $nonquery->bindParam(":id_usuario", $id_usuario);

        $con->executeNonQuery($nonquery);

        $id = $con->lastInsertId();

        return $id;
        $con = null;
    }

}
