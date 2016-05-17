<?php

include 'controllerIdDropdowns.php';
$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

try {
    $usuarios = $bitacle->getUsers();
    $id_usuario = cogerIdUsuario($usuarios, $user);

    $usuario = $bitacle->VerDetallesUsuario($id_usuario);

    $username = $usuario->getUsername();
    $email = $usuario->getEmail();
    $poblacion = $usuario->getPoblacion();
    $idioma = $usuario->getIdioma();
    $telefono = $usuario->getTelefono();
    $url = $usuario->getUrl();
    $texto = $usuario->getTextoPresentacion();
    $foto = $usuario->getFoto();
} catch (Exception $ex) {
    $ex->getMessage();
}
?>