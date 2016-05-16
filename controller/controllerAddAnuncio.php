<?php

session_start();
include("../model/functionAutoLoad.php");
include("validateNullfields.php");
include("validateNames.php");
include("validateDescriptions.php");
//include("../model/Business/classBitacle.php");
//include("../controller/controllerControlEmptyField.php");
//include("../controller/controllerControlNIF.php");
//include("../view/functionShowMessage.php"); 
//include("../controller/controllerControlFindNif.php");

$bitacle = unserialize($_SESSION['bitacle']);
//$bitacle = new Bitacle("bitacle");

//if (isset($_REQUEST['submit'])) {
    //Recover form data
    $titulo = $_REQUEST['tituloAnuncio'];
    $descripcion = $_REQUEST['descripcionAnuncio'];
    $imagen = $_REQUEST['imagenAnuncio'];
    $poi = $_REQUEST['poiAnuncio'];
    $idUser = $_REQUEST['usuario'];


    $requiredFields = Array($nombre, $descripcion);


    if (validateNullfields($requiredFields)) {
        echo "requireds ok";
        if (validateNames($nombre) && validateDescriptions($descripcion)) {

            echo "validations ok";
        } else {
            echo "validations error";
        }

        try {
            $bitacle->insertAnuncio(null, $_REQUEST['tituloAnuncio'], $_REQUEST['descripcionAnuncio'], $_REQUEST['imagenAnuncio'], $_REQUEST['poiAnuncio'], $_REQUEST['usuario']);

            echo $anuncio . "perfecto";

            //showMessage("Usuario ". $username ." creado correctamente");	
            //header("Location: ../index.php");
            //$_SESSION['bitacle']=serialize($bitacle);		
        } catch (Exception $e) {
            showMessage($e->getMessage());
        }
    }else{
        echo "requireds fail";
    }
?>