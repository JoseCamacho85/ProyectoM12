<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);
//$bitacle = new Bitacle("bitacle");


$nombre = $_REQUEST['nombre'];
$descripcion = $_REQUEST['descripcion'];
//$id_usuario = $_REQUEST['id_usuario'];

//aplicar id de usuario logeado
$usuarios = $bitacle->getUsers();
$id_usuario = cogerIdUsuario($usuarios, $user);

try {
    $bitacle->insertDiario(null, $nombre, $descripcion, $id_usuario);

    echo $nombre . "perfecto";

    //showMessage("Usuario ". $username ." creado correctamente");	
    //header("Location: ../index.php");
    //$_SESSION['bitacle']=serialize($bitacle);		
} catch (Exception $e) {
    showMessage($e->getMessage());
}
?>

