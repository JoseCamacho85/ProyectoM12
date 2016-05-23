<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classRutaDB
 *
 * @author toni
 */
class RutaDB {

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
