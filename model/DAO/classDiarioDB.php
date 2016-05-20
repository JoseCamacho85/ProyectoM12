<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classDiario
 *
 * @author toni
 */
class DiarioDB {

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
