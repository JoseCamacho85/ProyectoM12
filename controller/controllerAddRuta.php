<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("./validations/validateNullfields.php");
include("./validations/validateNombreRuta.php");
include("./validations/validateDescripcionRuta.php");
include("./validations/validateEmptyFieldRuta.php");

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);
if (isset($_REQUEST["submit"])) {
    $ruta = $_REQUEST['nameRuta'];
    $descripcion = $_REQUEST['nameDescripcion'];

    $requiredFields = Array($ruta, $descripcion);

    $usuarios = $bitacle->getUsers();
    $id_usuario = cogerIdUsuario($usuarios, $user);

    include 'validations/validateAddRuta.php';

    try {
        $userId = $bitacle->getId();
        $bitacle->insertRuta(null, $ruta, $descripcion, $id_usuario);
        include("../view/modules/refresh.php");
        header("location:../view/addRutas.php");
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
} else {
    echo "no has hecho submit";
}
?>