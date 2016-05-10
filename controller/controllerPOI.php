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
    $tipo = $_REQUEST['tipoPoi'];
    $transporte = $_REQUEST['transportePoi'];
    $entorno = $_REQUEST['entornoPoi'];
    $pais = $_REQUEST['paisPoi'];
    $ciudad = $_REQUEST['ciudadPoi'];

    try {
        $bitacle->insertUser(null, $_REQUEST['username'], $_REQUEST['password'], $_REQUEST['email'], $_REQUEST['poblacion'], $_REQUEST['idioma'], $_REQUEST['telefono'], $_REQUEST['url'], $_REQUEST['foto'], $_REQUEST['textoPresentacion']);
        echo $username . "perfecto";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
}
?>