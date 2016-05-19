<?php

session_start();
include("../model/functionAutoLoad.php");

$bitacle = unserialize($_SESSION['bitacle']);
$poi = $bitacle->getPois();
$historial = $bitacle->getHistorial();

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
        echo "<p>Foto: " . "<img src=\"fotoPoi/$foto\"/>" . "</p>";
        echo "<p>Descripción: " . $descripcion . "</p>";
        echo "<p>URL: " . $url . "</p>";
        echo "<p>Precio: " . $precio . "</p>";
        echo "<p>Horario: " . $horario . "</p>";
    }
}

for ($i = 0; $i < count($bitacle->getHistorial()); $i++) {

    if ($bitacle->getHistorial()[$i]->getId_poi() == $id_com) {
        $fechaVisitaPoi = $bitacle->getHistorial()[$i]->getFechaVisitaPoi();
        $estaEnPoi = $bitacle->getHistorial()[$i]->getEstaEnPoi();
        $texto = $bitacle->getHistorial()[$i]->getTexto();
        $foto = $bitacle->getHistorial()[$i]->getFoto();
        $video = $bitacle->getHistorial()[$i]->getVideo();

        echo "Fecha visita: <input type=\"text\" value=" . $fechaVisitaPoi . ">";
        echo "<p>¿Está?: <input type=\"checkbox\" value=" . $estaEnPoi . ">";
        echo "<p>Texto: <input type=\"text\" value=" . $texto . ">";
        echo "<p>Foto: " . "<img src=\"fotoPoi/$foto\"/>" . "</p>";
        echo "<p>Vídeo: <video> <source src=" . $video . "></video>";
    }
}
?>