<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateEmptyFieldPoi.php");
include("validations/validateNombreExisteTransporte.php");

$bitacle = unserialize($_SESSION['bitacle']);

$transporte = $_REQUEST['transporte'];

include 'validations/validateAddTransporte.php';

try {
    $bitacle->insertTransporte(null, $transporte);
    include("../view/modules/refresh.php");
    header("Location: ../view/administracion.php");
} catch (Exception $e) {
    showMessage($e->getMessage());
}
?>