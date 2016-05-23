<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateEmptyFieldPoi.php");

$bitacle = unserialize($_SESSION['bitacle']);

$entorno = $_REQUEST['entorno'];


    if(emptyField($entorno)==false){
      header("Location: ../view/errors/errorCamposVaciosPoi.html");
      break;
    }

    try {
        $bitacle->insertTransporte(null, $entorno);
        echo $entorno . " INSERTADO CORRECTAMENTE";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }

?>