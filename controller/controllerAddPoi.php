<?php

session_start();
include("../model/functionAutoLoad.php");
$bitacle = unserialize($_SESSION['bitacle']);

if (isset($_REQUEST['submit'])) {
    $nombre = $_REQUEST['nombrePoi'];
    $foto = $_REQUEST['fotoPoi'];
    $descripcion = $_REQUEST['descripcionPoi'];
    $url = $_REQUEST['urlPoi'];
    $precio = $_REQUEST['precioPoi'];
    $horario = $_REQUEST['horarioPoi'];
    $id_tipo = $_REQUEST['tipoPoi'];
    $id_transporte = 1/* $_REQUEST['transportePoi'] */;
    $id_entorno = 1/* $_REQUEST['entornoPoi'] */;
    $id_ciudad = 2/* $_REQUEST['ciudadPoi'] */;
    $id_pais = 2/* $_REQUEST['paisPoi'] */;
    $id_usuario = 1 /* $_REQUEST['usuarioPoi'] */;

    for ($i = 0; $i < count($bitacle->getTipos()); $i++) {
        if ($bitacle->getTipos()[$i]->getNombre() == $id_tipo) {
            $id_tipo1 = $bitacle->getTipos()[$i]->getId();
        }
    }

    $id_tipo2 = intval($id_tipo1);

    try {
        $bitacle->insertPoi(null, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo2, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario);
        echo $nombre . "perfecto";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
}
?>