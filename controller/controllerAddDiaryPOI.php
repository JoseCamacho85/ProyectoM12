<?php

session_start();
include("../model/functionAutoLoad.php");
include("../model/DAO/classRutaPOIDB.php");

$bitacle = unserialize($_SESSION['bitacle']);
//$user = unserialize($_SESSION['user']);

$idPOI = $_POST["idPOI"];
$idDiario = $_POST["idDiario"];
$diarioPOIObj = new DiarioPoiDB();

try {
    $diarioPOIObj->insertDiarioPoi($idPOI, $idDiario);
    echo "POI insertado";
    header("location:../view/showPOI.php");
} catch (Exception $e) {
    echo "error al insertar";
    showMessage($e->getMessage());
}
?>