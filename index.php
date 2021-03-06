<?php


include("model/functionAutoload.php");
//include("model/Business/classBitacle.php"); 
// if session bitacle doesn't exist, we make it.
session_start();
if (!isset($_SESSION['bitacle'])) {

    $bitacle = new Bitacle("bitacle");
    $bitacle->populatePois();
    $bitacle->populateTipos();
    $bitacle->populateTransportes();
    $bitacle->populateEntornos();
    $bitacle->populateCiudades();
    $bitacle->populatePaises();
    $bitacle->populateUsuarios();
    $bitacle->populateRutas();
    $bitacle->populateDiarios();
    $bitacle->populateHistorial();
    $bitacle->populateAnuncios();
    $_SESSION['bitacle'] = serialize($bitacle);
} else {
    // if session exist, we unserializate it.
    session_destroy($_SESSION['bitacle']);
    session_start();
    $bitacle = new Bitacle("bitacle");
    //$bitacle = unserialize($_SESSION['bitacle']);
    $bitacle->populatePois();
    $bitacle->populateTipos();
    $bitacle->populateTransportes();
    $bitacle->populateEntornos();
    $bitacle->populateCiudades();
    $bitacle->populatePaises();
    $bitacle->populateUsuarios();
    $bitacle->populateRutas();
    $bitacle->populateDiarios();
    $bitacle->populateHistorial();
    $bitacle->populateAnuncios();
    $_SESSION['bitacle'] = serialize($bitacle);
}

//print_r($_SESSION["bitacle"]);

header("Location:view/main.php");
?>