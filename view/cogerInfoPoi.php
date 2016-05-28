<?php

session_start();
include("../model/functionAutoLoad.php");

$bitacle = unserialize($_SESSION['bitacle']);

$poi = $bitacle->getPois();

$id_com = $_POST["data"];

for ($i = 0; $i < count($bitacle->getPois()); $i++) {

    if ($bitacle->getPois()[$i]->getId() == $id_com) {
        $nombre = $bitacle->getPois()[$i]->getNombre();
        $foto = $bitacle->getPois()[$i]->getFoto();
        $descripcion = $bitacle->getPois()[$i]->getDescripcion();
        $url = $bitacle->getPois()[$i]->getUrl();
        $precio = $bitacle->getPois()[$i]->getPrecio();
        $horario = $bitacle->getPois()[$i]->getHorario();

        echo "<p>Nombre: " . $nombre . "</p>";
        echo "<p><img src=\"fotoPoi/$foto\"/>" . "</p>";
        echo "<p>Descripción: " . $descripcion . "</p>";
        echo "<p>URL: <a href=" . $url . " target=\"_blank\">$url</a></p>";
        echo "<p>Precio: " . $precio . "</p>";
        echo "<p>Horario: " . $horario . "</p>";
    }
}
?>