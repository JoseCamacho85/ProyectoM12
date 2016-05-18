<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateNullfields.php");
include("validations/validateNames.php");
include("validations/validateDescriptions.php");
include("validations/validateURLS.php");
include("validations/validateHour.php");
$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

$nombre = $_REQUEST['nombrePoi'];
$foto = $_REQUEST['fotoPoi'];
$descripcion = $_REQUEST['descripcionPoi'];
$url = $_REQUEST['urlPoi'];
$precio = $_REQUEST['precioPoi'];
$horario = $_REQUEST['horarioPoi'];
$id_tipo = $_REQUEST['tipoPoi'];
$id_transporte = $_REQUEST['transportePoi'];
$id_entorno = $_REQUEST['entornoPoi'];
$id_pais = $_REQUEST['paisPoi'];
$id_ciudad = $_REQUEST['selectCiudadPOI'];

//aplicar id de usuario logeado
$usuarios = $bitacle->getUsers();
$id_usuario = cogerIdUsuario($usuarios, $user);

$tipo = $bitacle->getTipos();
$transporte = $bitacle->getTransportes();
$entorno = $bitacle->getEntornos();
$ciudad = $bitacle->getCiudades();
$pais = $bitacle->getPaises();

$id_tipo1 = cogerId($tipo, $id_tipo);
$id_transporte1 = cogerId($transporte, $id_transporte);
$id_entorno1 = cogerId($entorno, $id_entorno);
$id_ciudad1 = cogerId($ciudad, $id_ciudad);
$id_pais1 = cogerId($pais, $id_pais);
$requiredFields = Array($nombre, $descripcion);


if (validateNullfields($requiredFields)) {
    echo "requireds ok";
    if (validateNames($nombre) && validateDescriptions($descripcion) && validateUrls($url) && validateHour($horario)) {

        echo "validations ok";
    } else {
        echo "validations error";
    }
    try {
        $bitacle->insertPoi(null, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo1, $id_transporte1, $id_entorno1, $id_ciudad1, $id_pais1, $id_usuario);
        echo $nombre . " INSERTADO CORRECTAMENTE";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
} else {
    echo "requireds error";
}
?>