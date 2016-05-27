<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateEmptyFieldPoi.php");
include("validations/validateNombreExisteTipo.php");

$bitacle = unserialize($_SESSION['bitacle']);

$tipo = $_REQUEST['tipo'];

include 'validations/validateAddTipo.php';

try {
    $bitacle->insertTipo(null, $tipo);
    include("../view/modules/refresh.php");
    header("Location: ../view/administracion.php");
} catch (Exception $e) {
    showMessage($e->getMessage());
}
?>