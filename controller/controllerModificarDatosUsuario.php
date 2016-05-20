<?php

session_start();
include("../model/functionAutoLoad.php");
$bitacle = unserialize($_SESSION['bitacle']);
$id;
$username;
$email;
$poblacion;
$idioma;
$telefono;
$url;
$foto;
$textoPresentacion;
try {
    $bitacle->modificarDatosUsuario($id, $username, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion);
} catch (Exception $e) {
    $e->getMessage();
}
?>