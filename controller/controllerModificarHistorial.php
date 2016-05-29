<?php

session_start();

include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateTextoHistorial.php");

$bitacle = unserialize($_SESSION['bitacle']);

if (isset($_REQUEST['mostrarInfo'])) {

    $id_diario = $_REQUEST["diario"];
    $id_poi = $_REQUEST["poi"];
    $fechaVisitaPoi = $_REQUEST['fechaVisitaPoi'];
    $estaEnPoi = 0;
    $texto = $_REQUEST['textoHistorial'];
    //$foto = $_REQUEST['fotoHistorial'];
    $video = $_REQUEST['video'];
    $foto = null;

    if (isset($_REQUEST['estaEnPoi'])) {
        $estaEnPoi = 1;
    } else {
        $estaEnPoi = 0;
    }

    include 'validations/validateModifyHistorial.php';

    try {
        $bitacle->modificarHistorial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video);
        include("../view/modules/refresh.php");
        header("Location: ../view/mainUser.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
} else {
    echo "No has hecho submit";
}
?>