<?php

include("controllerIdDropdowns.php");
include("controllerNombreDropdowns.php");
include("../model/functionAutoLoad.php");
session_start();

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

$titulo = $_POST["title"];
$usuarioReceptor = $_POST["user"];
$message = $_POST["message"];

$MPs = $bitacle->VerMensajesPrivados($user);
if ($MPs) {

    foreach ($MPs as $value) {
        $emisor = cogerUsername($bitacle->getUsers(), $value->getId_emisor());
        echo "<table class='table table-bordered'><tr class='info'>";
        echo "<td><h5>Titulo: " . $value->getTitulo() . "</h5></td>"
        . "<td style='width:20%;'><h5>" . $emisor . "</h5></td></tr>";
        echo "<tr><td colspan='2'>" . $value->getTexto() . "</td></tr>";
    }
}
?>