<?php

session_start();

include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");

$bitacle = unserialize($_SESSION['bitacle']);

$id_diario = $_REQUEST['id'];
$id_poi = 8;
$fechaVisitaPoi = $_REQUEST['fechaVisitaPoi'];
$estaEnPoi = 0;
$texto = $_REQUEST['texto'];
$foto;
$video;

if (isset($_REQUEST['estaEnPoi'])) {
    $estaEnPoi = 1;
} else {
    $estaEnPoi = 0;
}

try {
    $bitacle->modificarHistorial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video);
} catch (Exception $e) {
    $e->getMessage();
}
?>