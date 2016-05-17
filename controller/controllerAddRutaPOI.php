<?php

session_start();
include("../model/functionAutoLoad.php");
include("../model/DAO/classRutaPOIDB.php");

$bitacle = unserialize($_SESSION['bitacle']);
//$user = unserialize($_SESSION['user']);

$idPOI = $_POST["idPoi"];
$idRuta = $_POST["idRuta"];
$rutaPOIObj = new RutaPOIDB();

try {
    $rutaPOIObj->insertRutaPoi($idPOI, $idRuta);
    echo "rutaPoi insertado";
} catch (Exception $e) {
    echo "error al insertar";
    showMessage($e->getMessage());
}
?>