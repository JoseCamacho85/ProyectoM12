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
        $con = new Database();
        $nonquery = $con->prepare("INSERT INTO ruta (nombre,descripcion, id_usuario) "
                . "VALUES (:nombre,:descripcion,:id_usuario)");
        $nombre = $ruta->getNombre();
        $descripcion = $ruta->getDescripcion();
        $idUsuario = $ruta->getId_usuario();

        $nonquery->bindParam(":nombre", $nombre);
        $nonquery->bindParam(":descripcion", $descripcion);
        $nonquery->bindParam(":id_usuario", $idUsuario);

        $con->executeNonQuery($nonquery);

        $sql = $con->prepare("SELECT id FROM usuario WHERE username = '" . $username . "'");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            return $id;
        }
        $con = null;
    }

}
