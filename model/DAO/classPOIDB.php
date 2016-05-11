<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classPOIDB
 *
 * @author Mazu
 */
class PoiDB {

    public function insertPoi($poi) {

        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO poi (nombre,foto,descripcion,url,precio,horario,id_tipo,id_transporte,id_entorno,id_ciudad,id_pais,id_usuario) VALUES (:nombre,:foto,:descripcion,:url,:precio,:horario,:id_tipo,:id_transporte,:id_entorno,:id_ciudad,:id_pais,:id_usuario)");
        $nombre = $poi->getNombre();
        $foto = $poi->getFoto();
        $descripcion = $poi->getDescripcion();
        $url = $poi->getUrl();
        $precio = $poi->getPrecio();
        $horario = $poi->getHorario();
        $id_tipo = $poi->getId_tipo();
        $id_transporte = $poi->getId_transporte();
        $id_entorno = $poi->getId_entorno();
        $id_ciudad = $poi->getId_ciudad();
        $id_pais = $poi->getId_pais();
        $id_usuario = $poi->getId_usuario();

        $nonquery->bindParam(":nombre", $nombre);
        $nonquery->bindParam(":foto", $foto);
        $nonquery->bindParam(":descripcion", $descripcion);
        $nonquery->bindParam(":url", $url);
        $nonquery->bindParam(":precio", $precio);
        $nonquery->bindParam(":horario", $horario);
        $nonquery->bindParam(":id_tipo", $id_tipo);
        $nonquery->bindParam(":id_transporte", $id_transporte);
        $nonquery->bindParam(":id_entorno", $id_entorno);
        $nonquery->bindParam(":id_ciudad", $id_ciudad);
        $nonquery->bindParam(":id_pais", $id_pais);
        $nonquery->bindParam(":id_usuario", $id_usuario);

        $con->executeNonQuery($nonquery);

        $id = $con->lastInsertId();
        return $id;

        $con = null;
    }

    function fecthPoi() {

        $pois = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM poi");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $foto = $row['foto'];
            $descripcion = $row['descripcion'];
            $url = $row['url'];
            $precio = $row['precio'];
            $horario = $row['horario'];
            $id_tipo = $row['id_tipo'];
            $id_transporte = $row['id_transporte'];
            $id_entorno = $row['id_entorno'];
            $id_ciudad = $row['id_ciudad'];
            $id_pais = $row['id_pais'];
            $id_usuario = $row['id_usuario'];
            $poi = new Poi($nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario);
            array_push($pois, $poi);
        }

        return $pois;
    }

}
