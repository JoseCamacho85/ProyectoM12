<?php

include 'controllerIdDropdowns.php';
$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

try {
    $usuarios = $bitacle->getUsers();
    $id_usuario = cogerIdUsuario($usuarios, $user);

    $usuario = $bitacle->VerDetallesUsuario($id_usuario);
    
    $username = $usuario->getUsername();
} catch (Exception $ex) {
    
}
?>