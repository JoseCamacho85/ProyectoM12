<?php

session_start();
include("../model/functionAutoLoad.php");
include("../model/DAO/classDiarioPoiDB.php");

$bitacle = unserialize($_SESSION['bitacle']);
//$user = unserialize($_SESSION['user']);

$idPOI = $_POST["idPoi"];
$idDiario = $_POST["idDiario"];
//$diarioPOIObj = new DiarioPoiDB();

try {
    $bitacle->insertDiarioPoi($idDiario, $idPOI);
    echo "POI insertado";
    header("location:../view/showPOI.php");
} catch (Exception $e) {
    echo "error al insertar";
    showMessage($e->getMessage());
}
?>