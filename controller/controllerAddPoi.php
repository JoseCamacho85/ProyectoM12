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
    $id_tipo = 1/* $_REQUEST['tipoPoi'] */;
    $id_transporte = 1/* $_REQUEST['transportePoi'] */;
    $id_entorno = 1/* $_REQUEST['entornoPoi'] */;
    $id_ciudad = 1/* $_REQUEST['ciudadPoi'] */;
    $id_pais = 1/* $_REQUEST['paisPoi'] */;
    $id_usuario = 1 /* $_REQUEST['usuarioPoi'] */;

    try {
        $bitacle->insertPoi(null, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario);
        echo $nombre . "perfecto";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
}
?>