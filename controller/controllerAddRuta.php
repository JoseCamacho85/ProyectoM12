<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("./validations/validateNullfields.php");
include("./validations/validateNames.php");
include("./validations/validateDescripcion.php");


$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

//Recover form data
$ruta = $_REQUEST['nameRuta'];
$descripcion = $_REQUEST['nameDescripcion'];
//$idUsuari = $_REQUEST['idUsuari'];
//if (isset($_REQUEST['submit'])) {}
//Recover form data
$ruta = $_REQUEST['nameRuta'];
$descripcion = $_REQUEST['nameDescripcion'];

$requiredFields = Array($ruta, $descripcion);
//aplicar id de usuario logeado
$usuarios = $bitacle->getUsers();
$id_usuario = cogerIdUsuario($usuarios, $user);

if (validateNullfields($requiredFields)) {
    echo "requireds ok";
    if (validateNames($ruta) && validateDescripcion($descripcion)) {

        echo "validations ok";
    } else {
        echo "validations error";
    }
    try {
        $userId = $bitacle->getId();
        $bitacle->insertRuta(null, $ruta, $descripcion, $id_usuario);
        header("location:../view/addRutas.php");
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
} else {
    echo "requireds fail";
}
?>