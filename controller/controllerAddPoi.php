<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
$bitacle = unserialize($_SESSION['bitacle']);



    $nombre = $_POST['nombrePoi'];
    $foto = $_POST['fotoPoi'];
    $descripcion = $_POST['descripcionPoi'];
    $url = $_POST['urlPoi'];
    $precio = $_POST['precioPoi'];
    $horario = $_POST['horarioPoi'];
    $id_tipo = $_POST['tipoPoi'];
    $id_transporte = $_POST['transportePoi'];
    $id_entorno = $_POST['entornoPoi'];
    $id_ciudad = $_POST['ciudadPoi'];
    $id_pais = $_POST['paisPoi'];
    $id_usuario = 5 /* $_POST['usuarioPoi'] */;

    
    $tipo = $bitacle->getTipos();
    $transporte = $bitacle->getTransportes();
    $entorno = $bitacle->getEntornos();
    $ciudad = $bitacle->getCiudades();
    $pais = $bitacle->getPaises();
//    $usuario = $bitacle->getUsers();

    $id_tipo1 = cogerId($tipo, $id_tipo);
    $id_transporte1 = cogerId($transporte, $id_transporte);
    $id_entorno1 = cogerId($entorno, $id_entorno);
    $id_ciudad1 = cogerId($ciudad, $id_ciudad);
    $id_pais1 = cogerId($pais, $id_pais);
//    $id_usuario1 = cogerId($usuario, $id_usuario);

    try {
        $bitacle->insertPoi(null, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo1, $id_transporte1, $id_entorno1, $id_ciudad1, $id_pais1, $id_usuario);
        echo $nombre . " INSERTADO CORRECTAMENTE";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }

?>