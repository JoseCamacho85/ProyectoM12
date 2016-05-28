<?php

//echo "HOLHA K TAL";
session_start();
include("../model/functionAutoLoad.php");
include("../model/DAO/classRutaPOIDB.php");

$bitacle = unserialize($_SESSION['bitacle']);

$idPOI = $_POST["idPoi"];
$idRuta = $_POST["idRuta"];
$btnRuta = $_POST["#addRuta"];

echo $idPOI;
echo $idRuta;


try {
    $bitacle->insertRutaPoi($idPOI, $idRuta);
    echo "rutaPoi insertado";
    header("location:../view/showPOI.php");
} catch (Exception $e) {
    //header("location:../view/showDetallePoi.php?id=" . $idPOI . "");
    echo "error al insertar";
    showMessage($e->getMessage());
}
?>