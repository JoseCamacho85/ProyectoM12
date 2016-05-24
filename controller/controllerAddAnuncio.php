<?php

session_start();
include("../model/functionAutoLoad.php");
//include("validateNullfields.php");
//include("validateNames.php");
//include("validateDescriptions.php");
include("controllerIdDropdowns.php");
include("./validations/validateDescripcionAnuncio.php");
include("./validations/validateNombreAnuncio.php");
include("./validations/validateEmptyFieldAnuncio.php");


//include("../model/Business/classBitacle.php");
//include("../controller/controllerControlEmptyField.php");
//include("../controller/controllerControlNIF.php");
//include("../view/functionShowMessage.php"); 
//include("../controller/controllerControlFindNif.php");

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);
//$bitacle = new Bitacle("bitacle");
//if (isset($_REQUEST['submit'])) {
//Recover form data
$titulo = $_REQUEST['tituloAnuncio'];
$descripcion = $_REQUEST['descripcionAnuncio'];
$imagen = $_REQUEST['imagenAnuncio'];
$usuarios = $bitacle->getUsers();
$id_usuario = cogerIdUsuario($usuarios, $user);
$id_poi = $_REQUEST['POIAnuncio'];

if (emptyField($titulo) == false) {
    header("Location: ../view/errors/errorCampoVacioAnuncio.html");
    break;
} else if (validateNombreAnuncio($titulo) == false) {
    header("Location: ../view/errors/errorCampoNombreAnuncio.html");
    break;
} else if (emptyField($descripcion) == false) {
    header("Location: ../view/errors/errorCampoVacioAnuncio.html");
    break;
} else if (validateDescripcionAnuncio($descripcion) == false) {
    header("Location: ../view/errors/errorCampoDescripcionAnuncio.html");
    break;
}

if (isset($_REQUEST["crearAnuncio"])) {
    try {
        $bitacle->insertAnuncio(null, $titulo, $descripcion, $imagen, $id_poi, $id_usuario);

        echo $titulo . "perfecto";

//showMessage("Usuario ". $username ." creado correctamente");	
//header("Location: ../index.php");
        $_SESSION['bitacle'] = serialize($bitacle);
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
    header("Location: ../view/addAnuncio.php");
}

if (isset($_REQUEST["modificarAnuncio"])) {
    try {
        $bitacle->modificarAnuncio($titulo, $descripcion, $imagen, $id_poi, $id_usuario);

        echo $titulo . "perfecto";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
    header("Location: ../view/addAnuncio.php");
} else {
    echo "required fields";
}
?>