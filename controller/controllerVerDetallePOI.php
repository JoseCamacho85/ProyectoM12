<?php

include 'controllerNombreDropdowns.php';

$bitacle = unserialize($_SESSION['bitacle']);

try {

    $objPOI = $bitacle->VerDetallesPOI($_REQUEST['id']);

    $tipo = $bitacle->getTipos();
    $transporte = $bitacle->getTransportes();
    $entorno = $bitacle->getEntornos();
    $ciudad = $bitacle->getCiudades();
    $pais = $bitacle->getPaises();

    $nombre = $objPOI->getNombre();
    $foto = $objPOI->getFoto();
    $descripcion = $objPOI->getDescripcion();
    $url = $objPOI->getUrl();
    $precio = $objPOI->getPrecio();
    $horario = $objPOI->getHorario();
    $id_tipo = cogerNombre($tipo, $objPOI->getId_tipo());
    $id_transporte = cogerNombre($transporte, $objPOI->getId_transporte());
    $id_entorno = cogerNombre($entorno, $objPOI->getId_entorno());
    $id_ciudad = cogerNombre($ciudad, $objPOI->getId_ciudad());
    $id_pais = cogerNombre($pais, $objPOI->getId_pais());
} catch (Exception $e) {
    
}
?>