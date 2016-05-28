<?php

session_start();
include("../model/functionAutoLoad.php");
include("../model/DAO/classDiarioPoiDB.php");

$bitacle = unserialize($_SESSION['bitacle']);

$idPOI = $_POST["idPoi"];
$idDiario = $_POST["idDiario"];
$btnDiario = $_POST["#addDiario"];

try {
    $bitacle->insertDiarioPoi($idDiario, $idPOI);
    echo "POI insertado";
    header("location:../view/showPOI.php");
} catch (Exception $e) {
    echo "error al insertar";
    /**
     * muestra el mensaje de error lanzado por el try catch
     */
    showMessage($e->getMessage());
}
?>