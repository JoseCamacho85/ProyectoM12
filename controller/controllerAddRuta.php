<?php

session_start();
include("../model/functionAutoLoad.php");

$bitacle = unserialize($_SESSION['bitacle']);

if (isset($_REQUEST['submit'])) {
    //Recover form data
    $ruta = $_REQUEST['nameRuta'];
    $descripcion = $_REQUEST['nameDescripcion'];
    $idUsuari = $_REQUEST['idUsuari'];
}

try {
    $userId= $bitacle->getId();
    $bitacle->insertRuta(null, $ruta, $descripcion, $idUsuari);
    header("location:../view/addRutas.php");
} catch (Exception $e) {
    showMessage($e->getMessage());
}
?>