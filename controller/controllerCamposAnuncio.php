<?php

session_start();
include("../model/functionAutoLoad.php");

$bitacle = unserialize($_SESSION['bitacle']);
$anuncio = $bitacle->getAnuncios();
$arrayDatos = [];
$resultado = "";

$id_com = $_POST["data"];


for ($i = 0; $i < count($bitacle->getAnuncios()); $i++) {
    if ($bitacle->getAnuncios()[$i]->getPoi() == $id_com) {
        $resultado = $resultado . $bitacle->getAnuncios()[$i]->getTitulo();
        $resultado = $resultado . "," . $bitacle->getAnuncios()[$i]->getDescripcion();
        $resultado = $resultado . "," . $bitacle->getAnuncios()[$i]->getImagen();

        echo $resultado;
    } else {
        echo null;
    }
}
?>