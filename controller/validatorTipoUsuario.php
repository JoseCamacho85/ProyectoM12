<?php
$usuarios = $bitacle->getUsers();
$id = cogerIdUsuario($usuarios, $user);
$objUsuarioConectado = devolverUsuario($id,$usuarios);
?>