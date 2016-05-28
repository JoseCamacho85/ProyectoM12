<?php

session_start();
include("controllerIdDropdowns.php");
include("controllerNombreDropdowns.php");
include("../model/functionAutoLoad.php");
$bd = "bitaclebd";
$server = "localhost";
$userbd = "root";
$password = "";


$bitacle = unserialize($_SESSION['bitacle']);

$user = unserialize($_SESSION['user']);

$titulo = $_POST["title"];
$usuarioReceptor = $_POST["user"];
$message = $_POST["message"];

$usuario = $bitacle->getUsers();
$id_usuario = cogerIdUsuario($usuario, $user);
$receptor = cogerUsername($usuario, $usuarioReceptor);

try {
    $bitacle->insertMP(null, $titulo, $message, $receptor, $id_usuario);
} catch (Exception $ex) {
    
}
?>