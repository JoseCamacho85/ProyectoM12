<?php

$bitacle = unserialize($_SESSION['bitacle']);

try {

    $ruta = $bitacle->VerDetallesRuta($_REQUEST['id']);

    $nombre = $ruta->getNombre();
    $descripcion = $ruta->getDescripcion();
} catch (Exception $e) {
    
}
?>