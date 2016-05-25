<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateEmptyFieldPoi.php");
include("validations/validateNombreExisteTipo.php");

$bitacle = unserialize($_SESSION['bitacle']);

$tipo = $_REQUEST['tipo'];

if (emptyField($tipo) == false) {
    header("Location: ../view/errors/errorCamposVaciosPoi.html");
    break;
} else if (controlFindTipo($tipo) == false) {
    header("Location: ../view/errors/errorCampoNombreExisteTipo.html");
    break;
}

try {
    $bitacle->insertTipo(null, $tipo);
    header("Location: ../view/administracion.php");
} catch (Exception $e) {
    showMessage($e->getMessage());
}
?>