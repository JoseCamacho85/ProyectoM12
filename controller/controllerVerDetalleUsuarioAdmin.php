<?php

//include 'controllerNombreDropdowns.php';

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

try {

    $usuario = $bitacle->VerDetallesUsuario($_REQUEST['id']);

    $username = $usuario->getUsername();
    $email = $usuario->getEmail();
    $poblacion = $usuario->getPoblacion();
    $idioma = $usuario->getIdioma();
    $telefono = $usuario->getTelefono();
    $url = $usuario->getUrl();
    $texto = $usuario->getTextoPresentacion();
    $foto = $usuario->getFoto();
} catch (Exception $e) {
    $ex->getMessage();
}
?>