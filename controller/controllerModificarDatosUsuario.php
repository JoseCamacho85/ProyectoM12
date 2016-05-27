<?php

session_start();

include("../model/functionAutoLoad.php");
include 'controllerIdDropdowns.php';

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$poblacion = $_REQUEST['poblacion'];
$idioma = $_REQUEST['idioma'];
$telefono = $_REQUEST['telefono'];
$url = $_REQUEST['url'];
$foto = $_REQUEST['fotoUser'];
$textoPresentacion = $_REQUEST['textoPresentacion'];

$usuarios = $bitacle->getUsers();
$id = cogerIdUsuario($usuarios, $user);

try {
    $bitacle->modificarDatosUsuario($id, $username, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion);
	include("../view/modules/refresh.php");
} catch (Exception $e) {
    $e->getMessage();
}
header("Location: ../view/mainUser.php");
?>