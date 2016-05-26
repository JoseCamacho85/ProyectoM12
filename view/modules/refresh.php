<?php
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

?>