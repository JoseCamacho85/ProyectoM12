<?php

session_start();
include("../model/functionAutoLoad.php");

$bitacle = unserialize($_SESSION['bitacle']);
//Recover form data
$ruta = $_REQUEST['nameRuta'];
$descripcion = $_REQUEST['nameDescripcion'];
$idUsuari = $_REQUEST['idUsuari'];
//if (isset($_REQUEST['submit'])) {}
//Recover form data
$ruta = $_REQUEST['nameRuta'];
$descripcion = $_REQUEST['nameDescripcion'];

$requiredFields = Array($nombre, $descripcion);


if (validateNullfields($requiredFields)) {
    echo "requireds ok";
    if (validateNames($nombre) && validateDescriptions($descripcion)) {

        echo "validations ok";
    } else {
        echo "validations error";
    }
    try {
        $userId = $bitacle->getId();
        $bitacle->insertRuta(null, $ruta, $descripcion, $idUsuari);
        header("location:../view/addRutas.php");
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
} else {
    echo "requireds fail";
}
?>