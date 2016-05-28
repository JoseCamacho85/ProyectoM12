<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("./validations/validateDescripcionDiario.php");
include("./validations/validateNombreDiario.php");
include("./validations/validateEmptyFieldDiario.php");

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

if (isset($_REQUEST["submit"])) {

    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];

    $usuarios = $bitacle->getUsers();
    $id_usuario = cogerIdUsuario($usuarios, $user);

    include 'validations/validateAddDiario.php';

    try {
        $bitacle->insertDiario(null, $nombre, $descripcion, $id_usuario);
        include("../view/modules/refresh.php");
        header("Location:../view/showDiaryUser.php");
        echo $nombre . "perfecto";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
} else {
    echo "no has hecho submit";
}
?>

