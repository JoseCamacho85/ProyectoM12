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

    //echo $username . "perfecto";

    //showMessage("Usuario ". $username ." creado correctamente");	
    //header("Location: ../index.php");
    //$_SESSION['bitacle']=serialize($bitacle);		
} catch (Exception $e) {
    showMessage($e->getMessage());
}
?>