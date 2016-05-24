<?php

session_start();

include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");

$bitacle = unserialize($_SESSION['bitacle']);

$id_diario = $_REQUEST["diario"];
$id_poi = $_REQUEST["poi"];
echo $id_diario;
echo $id_poi;
$fechaVisitaPoi = $_REQUEST['fechaVisitaPoi'];
$estaEnPoi = 0;
$texto = $_REQUEST['textoHistorial'];
$foto = $_REQUEST['fotoHistorial'];
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