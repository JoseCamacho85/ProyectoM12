<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateEmptyFieldPoi.php");
include("validations/validateNombreExisteEntorno.php");

$bitacle = unserialize($_SESSION['bitacle']);

$entorno = $_REQUEST['entorno'];

if (emptyField($entorno) == false) {
    header("Location: ../view/errors/errorCamposVaciosPoi.html");
    break;
} else if (controlFindEntorno($entorno) == false) {
    header("Location: ../view/errors/errorCampoNombreExisteEntorno.html");
    break;
}

try {
    $bitacle->insertEntorno(null, $entorno);
    header("Location: ../view/administracion.php");
} catch (Exception $e) {
    showMessage($e->getMessage());
}
?>