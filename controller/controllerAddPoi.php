<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateUrlPoi.php");
include("validations/validateEmptyFieldPoi.php");
include("validations/validatePrecioPoi.php");
include("validations/validateHorarioPoi.php");
include("validations/validateNombrePoi.php");
include("validations/validateDescripcionPoi.php");

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

$nombre = $_REQUEST['nombrePoi'];
$foto = $_REQUEST['fotoPoi'];
$descripcion = $_REQUEST['descripcionPoi'];
$url = $_REQUEST['urlPoi'];
$precio = $_REQUEST['precioPoi'];
$horario = $_REQUEST['horarioPoi'];
$id_tipo = $_REQUEST['tipoPoi'];
$id_transporte = $_REQUEST['transportePoi'];
$id_entorno = $_REQUEST['entornoPoi'];
$id_pais = $_REQUEST['paisPoi'];
$id_ciudad = $_REQUEST['selectCiudadPOI'];

//aplicar id de usuario logeado
$usuarios = $bitacle->getUsers();
$id_usuario = cogerIdUsuario($usuarios, $user);

$tipo = $bitacle->getTipos();
$transporte = $bitacle->getTransportes();
$entorno = $bitacle->getEntornos();
$ciudad = $bitacle->getCiudades();
$pais = $bitacle->getPaises();

$id_tipo1 = cogerId($tipo, $id_tipo);
$id_transporte1 = cogerId($transporte, $id_transporte);
$id_entorno1 = cogerId($entorno, $id_entorno);
$id_ciudad1 = cogerId($ciudad, $id_ciudad);
$id_pais1 = cogerId($pais, $id_pais);
$requiredFields = Array($nombre, $descripcion);


    if(emptyField($nombre)==false){
      header("Location: ../view/errors/errorCamposVaciosPoi.html");
      break;
    }
    else if(validateNombrePoi($nombre)==false){
      header("Location: ../view/errors/errorCampoNombrePoi.html");
      break;
    }
    else if(emptyField($descripcion)==false){
      header("Location: ../view/errors/errorCamposVaciosPoi.html");
      break;         
    }
    else if(validateDescripcion($descripcion)==false){
      header("Location: ../view/errors/errorCampoDescripcionPoi.html");
      break;         
    }
    else if(validateUrls($url)==false){
      header("Location: ../view/errors/errorCampoUrlPoi.html");
      break;         
    }
    else if(validatePrecio($precio)==false){
      header("Location: ../view/errors/errorCampoPrecioPoi.html");
      break;         
    }
    else if(validateHorario($horario)==false){
      header("Location: ../view/errors/errorCampoHorarioPoi.html");
      break;         
    }

    try {
        $bitacle->insertPoi(null, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo1, $id_transporte1, $id_entorno1, $id_ciudad1, $id_pais1, $id_usuario);
        echo $nombre . " INSERTADO CORRECTAMENTE";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }

?>