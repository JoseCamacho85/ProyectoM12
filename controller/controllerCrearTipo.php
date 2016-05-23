<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateEmptyFieldPoi.php");

$bitacle = unserialize($_SESSION['bitacle']);

$tipo = $_REQUEST['tipo'];


    if(emptyField($tipo)==false){
      header("Location: ../view/errors/errorCamposVaciosPoi.html");
      break;
    }

    try {
        $bitacle->insertTipo(null, $tipo);
        echo $tipo . " INSERTADO CORRECTAMENTE";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }

?>