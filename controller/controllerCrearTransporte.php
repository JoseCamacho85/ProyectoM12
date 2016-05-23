<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateEmptyFieldPoi.php");

$bitacle = unserialize($_SESSION['bitacle']);

$transporte = $_REQUEST['transporte'];


    if(emptyField($transporte)==false){
      header("Location: ../view/errors/errorCamposVaciosPoi.html");
      break;
    }

    try {
        $bitacle->insertTransporte(null, $transporte);
        echo $transporte . " INSERTADO CORRECTAMENTE";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }

?>