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

        echo "<br><div class="."cuadro".">";
        echo "<p class=\"titulos\">" . $nombre . "</p>";
        echo "<p><img src=\"fotoPoi/$foto\"/>" . "</p>";
        echo "<p><span class="."titulos".">Descripción: </span>" . $descripcion . "</p>";
        echo "<p><span class="."titulos".">URL: </span><a href=" . $url . " target=\"_blank\">$url</a></p>";
        echo "<p><span class="."titulos".">Precio: </span>" . $precio . "</p>";
        echo "<p><span class="."titulos".">Horario: </span>" . "</p>";
        echo "</div>";
    }
}
?>