<?php

$bitacle = unserialize($_SESSION['bitacle']);

try {

    $diario = $bitacle->VerDetallesDiario($_REQUEST['id']);

    $nombre = $diario->getNombre();
    $descripcion = $diario->getDescripcion();
} catch (Exception $e) {
    $e->getMessage();
}
?>