<?php

$usuario = "";

/**
 * método que retorna un usuario
 * @param type $id_usuario id del usuario sobre el que se hace la busqueda
 * @param type $users array de usuarios
 * @return type
 */
function devolverUsuario($id_usuario, $users) {
    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]->getId() == $id_usuario) {
            $usuario = $users[$i];
        }
    }

    return $usuario;
}

$usuarios = $bitacle->getUsers();
$id = cogerIdUsuario($usuarios, $user);
$objUsuarioConectado = devolverUsuario($id, $usuarios);
?>