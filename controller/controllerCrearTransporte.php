<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateEmptyFieldPoi.php");
include("validations/validateNombreExisteTransporte.php");

$bitacle = unserialize($_SESSION['bitacle']);

$transporte = $_REQUEST['transporte'];

if (emptyField($transporte) == false) {
    header("Location: ../view/errors/errorCamposVaciosPoi.html");
    break;
} else if (controlFindTransporte($transporte) == false) {
    header("Location: ../view/errors/errorCampoNombreExisteTransporte.html");
    break;
}

try {
    $bitacle->insertTransporte(null, $transporte);
    header("Location: ../view/administracion.php");
} catch (Exception $e) {
    showMessage($e->getMessage());
}
?>