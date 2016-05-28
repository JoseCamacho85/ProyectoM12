<?php

session_start();
include("../model/functionAutoLoad.php");
include("../model/DAO/classDiarioPoiDB.php");


$bitacle = unserialize($_SESSION['bitacle']);


$idPOI = $_POST["idPoi"];
$idDiario = $_POST["idDiario"];
$btnDiario = $_POST["#addDiario"];
//$diarioPOIObj = new DiarioPoiDB();




try {
    $bitacle->insertDiarioPoi($idDiario, $idPOI);
    echo "POI insertado";
    header("location:../view/showPOI.php");
} catch (Exception $e) {
   // header("location:../view/showDetallePoi.php?id=" . $idPOI . "");
    echo "error al insertar";
    showMessage($e->getMessage());
}


?>