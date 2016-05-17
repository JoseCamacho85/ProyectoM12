<?php

session_start();
include("../model/functionAutoLoad.php");

$bitacle = unserialize($_SESSION['bitacle']);
//$user = unserialize($_SESSION['user']);

$idPOI = $_POST["idPOI"];
$idRuta = $_POST["idRuta"];

try {
    $bitacle->insertRutaPoi($idPOI, $idRuta);
} catch (Exception $e) {
    echo "error al insertar";
    showMessage($e->getMessage());
}finally{
    echo "rutaPoi insertado";
}
?>