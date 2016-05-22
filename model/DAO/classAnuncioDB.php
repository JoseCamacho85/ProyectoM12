<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classPOIDB
 *
 * @author jose
 */
class AnuncioDB {

    public function insertAnuncio($anuncio) {

        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO anuncio (titulo,descripcion, imagen, id_poi, id_usuario) "
                . "VALUES (:titulo,:descripcion,:imagen,:id_poi,:id_usuario)");
        $titulo = $anuncio->getTitulo();
        $descripcion = $anuncio->getDescripcion();
        $imagen = $anuncio->getImagen();
        $id_poi = $anuncio->getPoi();
        $id_usuario = $anuncio->getUsuario();

        $nonquery->bindParam(":titulo", $titulo);
        $nonquery->bindParam(":descripcion", $descripcion);
        $nonquery->bindParam(":imagen", $imagen);
        $nonquery->bindParam(":id_poi", $id_poi);
        $nonquery->bindParam(":id_usuario", $id_usuario);

        $con->executeNonQuery($nonquery);

        $con = null;
    }

}
