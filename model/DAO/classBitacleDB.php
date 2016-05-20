<?php

include("dbConnector.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classBitacleDB
 *
 * @author Mazu
 */
class BitacleDB {

    function fetchValidateUser($user, $password) {
        $sql = "SELECT * FROM usuario WHERE username = '" . $user . "'";
        $con = new DB();
        $result = $con->query($sql);
        $ok = false;
        if ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            if ($user === $row['username']) {
                if (md5($password) === $row['password']) {
                    $ok = true;
                } else {
                    $ok = false;
                }
            } else {
                $ok = false;
            }
        }
        return $ok;
    }

    function fetchAnuncio() {

        $anuncios = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM anuncio");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $titulo = $row['titulo'];
            $descripcion = $row['descripcion'];
            $imagen = $row['imagen'];
            $id_poi = $row['id_poi'];
            $id_usuario = $row['id_usuario'];
            $anuncio = new Anuncio($id, $titulo, $descripcion, $imagen, $id_poi, $id_usuario);
            array_push($anuncios, $anuncio);
        }

        return $anuncios;
    }

    function fetchDiario() {

        $diarios = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM diario");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $id_usuario = $row['id_usuario'];
            $diario = new Diario($id, $nombre, $descripcion, $id_usuario);
            array_push($diarios, $diario);
        }

        return $diarios;
    }

    function fetchRuta() {

        $rutas = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM ruta");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $id_usuario = $row['id_usuario'];
            $ruta = new Ruta($id, $nombre, $descripcion, $id_usuario);
            array_push($rutas, $ruta);
        }

        return $rutas;
    }

    function fetchCiudad() {

        $ciudades = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM ciudad");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $id_pais = $row['id_pais'];
            $ciudad = new Ciudad($id, $nombre, $id_pais);
            array_push($ciudades, $ciudad);
        }

        return $ciudades;
    }

    function fetchEntorno() {

        $entornos = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM entorno");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $entorno = new Entorno($id, $nombre);
            array_push($entornos, $entorno);
        }

        return $entornos;
    }

    function fetchPais() {

        $paises = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM pais");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $pais = new Pais($id, $nombre);
            array_push($paises, $pais);
        }

        return $paises;
    }

    function fetchPoi() {

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
            $poi = new Poi($id, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario);
            array_push($pois, $poi);
        }

        return $pois;
    }

    function fetchTipo() {

        $tipos = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM tipo");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $tipo = new Tipo($id, $nombre);
            array_push($tipos, $tipo);
        }

        return $tipos;
    }

    function fetchTransporte() {

        $transportes = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM transporte");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $transporte = new Transporte($id, $nombre);
            array_push($transportes, $transporte);
        }

        return $transportes;
    }

    function fetchUsuario() {

        $usuarios = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM usuario");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $username = $row['username'];
            $password = $row['password'];
            $email = $row['email'];
            $poblacion = $row['poblacion'];
            $idioma = $row['idioma'];
            $telefono = $row['telefono'];
            $url = $row['url'];
            $foto = $row['foto'];
            $textoPresentacion = $row['textoPresentacion'];
            $administrador = $row['esAdministrador'];
            $registrado = $row['esUsuarioRegistrado'];
            $professional = $row['esUsuarioProfesional'];
            $usuario = new Usuario($id, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion, $administrador, $registrado, $professional);
            array_push($usuarios, $usuario);
        }

        return $usuarios;
    }

    function fetchHistorial() {

        $historiales = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM historial");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id_diario = $row['id_diario'];
            $id_poi = $row['id_poi'];
            $fechaVisitaPoi = $row['fechaVisitaPoi'];
            $estaEnPoi = $row['estaEnPoi'];
            $texto = $row['texto'];
            $foto = $row['foto'];
            $video = $row['video'];
            $historial = new Historial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video);
            array_push($historiales, $historial);
        }

        return $historiales;
    }

    function crearQueryDB($fields, $fieldNames) {

        $query = "SELECT * FROM POI WHERE ";

        //$arr = array();

        /* for ($i = 0; $i < count($fields); $i++) {
          if ($fields[$i] != null) {
          $arr[$i] .= $fields[$i];
          }
          } */

        //print_r($arr);

        for ($i = 0; $i < count($fields); $i++) {
            if ($fields[$i] != null) {
                //echo count($arr);
                if ($i == count($fields) - 1) {
                    $query .= $fieldNames[$i] . "=" . $fields[$i] . "  ";
                } else {
                    $query .= $fieldNames[$i] . "=" . $fields[$i] . " and ";
                }
            }
        }
        //echo $query;

        $pois = array();

        $con = new DB();
        $sql = $con->prepare($query);
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
            $poi = new Poi($id, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario);
            array_push($pois, $poi);
        }

//Muestra resultado
        return $pois;
    }

    function DropdownPoisRuta($idRuta) {

        $arrayRutaPoi = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM rutapoi WHERE id_ruta = " . $idRuta);
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id_ruta = $row['id_ruta'];
            $id_poi = $row['id_poi'];
            $rutaPoi = new RutaPOI($id_ruta, $id_poi);
            array_push($arrayRutaPoi, $rutaPoi);
        }

        return $arrayRutaPoi;
    }

    function DropdownPoisDiario($idDiario) {

        $arrayDiarioPoi = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM historial WHERE id_diario = " . $idDiario);
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id_diario = $row['id_diario'];
            $id_poi = $row['id_poi'];
            $fechaVisitaPoi = $row['fechaVisitaPoi'];
            $estaEnPoi = $row['estaEnPoi'];
            $texto = $row['texto'];
            $foto = $row['foto'];
            $video = $row['video'];
            $diarioPoi = new Historial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video);
            array_push($arrayDiarioPoi, $diarioPoi);
        }

        return $arrayDiarioPoi;
    }

    function modificarDatosUsuario($id, $username, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion) {
        $sql = "UPDATE usuario SET username='" . $username . "',email='" . $email . "',poblacion='" . $poblacion . "',"
                . "idioma='" . $idioma . "',telefono='" . $telefono . "',url='" . $url . "',foto='" . $foto . "',"
                . "textoPresentacion='" . $textoPresentacion . "' WHERE id='" . $id . "'";
        $con = new DB();
        $result = $con->exec($sql);
        $con = null;
    }

    function modificarHistorial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video) {
        $sql = "UPDATE historial SET fechaVisitaPoi='" . $fechaVisitaPoi . "',estaEnPoi='" . $estaEnPoi . "',texto='" . $texto . "',"
                . "foto='" . $foto . "',video='" . $video . "' WHERE id_diario='" . $id_diario . "' AND id_poi='" . $id_poi . "'";
        $con = new DB();
        $result = $con->exec($sql);
        $con = null;
    }

}
