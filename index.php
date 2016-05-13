<?php

session_start();
include("model/functionAutoload.php");
//include("model/Business/classBitacle.php"); 
// if session bitacle doesn't exist, we make it.
if (!isset($_SESSION['bitacle'])) {

    $bitacle = new Bitacle("bitacle");
    $bitacle->populatePois();
    $bitacle->populateTipos();
    $bitacle->populateTransportes();
    $bitacle->populateEntornos();
    $bitacle->populateCiudades();
    $bitacle->populatePaises();
    $_SESSION['bitacle'] = serialize($bitacle);
} else {
    // if session exist, we unserializate it.
    $bitacle = unserialize($_SESSION['bitacle']);
}
header("Location:view/addPoi.php");
?>