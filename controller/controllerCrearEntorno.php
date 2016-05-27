<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateEmptyFieldPoi.php");
include("validations/validateNombreExisteEntorno.php");

$bitacle = unserialize($_SESSION['bitacle']);

$entorno = $_REQUEST['entorno'];

include 'validations/validateAddEntorno.php';

try {
    $bitacle->insertEntorno(null, $entorno);
    include("../view/modules/refresh.php");
    header("Location: ../view/administracion.php");
} catch (Exception $e) {
    showMessage($e->getMessage());
}
?>