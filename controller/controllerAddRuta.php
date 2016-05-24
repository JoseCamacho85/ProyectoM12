<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("./validations/validateNullfields.php");
include("./validations/validateNombreRuta.php");
include("./validations/validateDescripcionRuta.php");
include("./validations/validateEmptyFieldRuta.php");



$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

//Recover form data
$ruta = $_REQUEST['nameRuta'];
$descripcion = $_REQUEST['nameDescripcion'];
$ruta = $_REQUEST['nameRuta'];
$descripcion = $_REQUEST['nameDescripcion'];

$requiredFields = Array($ruta, $descripcion);
//aplicar id de usuario logeado
$usuarios = $bitacle->getUsers();
$id_usuario = cogerIdUsuario($usuarios, $user);

if (emptyField($requiredFields)) {
    echo "requireds ok";
    if (validateNombreRuta($ruta) && validateDescripcionRuta($descripcion)) {

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