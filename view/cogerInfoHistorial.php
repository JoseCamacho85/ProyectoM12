<?php

session_start();
include("../model/functionAutoLoad.php");

$bitacle = unserialize($_SESSION['bitacle']);

$id_com = $_POST["data"];
$id_diario = $_POST["diario"];

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
    if ($bitacle->getHistorial()[$i]->getId_poi() == $id_com && $bitacle->getHistorial()[$i]->getId_diario() == $id_diario) {
        $fechaVisitaPoi = $bitacle->getHistorial()[$i]->getFechaVisitaPoi();
        $estaEnPoi = $bitacle->getHistorial()[$i]->getEstaEnPoi();
        $texto = $bitacle->getHistorial()[$i]->getTexto();
        $foto = $bitacle->getHistorial()[$i]->getFoto();
        $video = $bitacle->getHistorial()[$i]->getVideo();

        if ($estaEnPoi == 1) {
            $checked = "checked";
        } else {
            $checked = null;
        }

        echo "<input type=\"hidden\" name=\"poi\" value=" . $id_com . ">";
        echo "<input type=\"hidden\" name=\"diario\" value=" . $id_diario . ">";
        echo "<p>Fecha visita: <input name=\"fechaVisitaPoi\" type=\"date\" value=" . $fechaVisitaPoi . "></p>";
        echo "<p>¿Se ha visitado?: <input name=\"estaEnPoi\" type=\"checkbox\" $checked value=" . $estaEnPoi . "></p>";
        echo "<p>Texto:</p><textarea rows=\"5\" cols=\"25\" name=\"textoHistorial\">$texto</textarea>";
        include ("./modules/addFotoHistorial.php");
        echo "<p>Foto: <input id=\"fotoHistorial\" type=\"text\" id=\"fotoUser\" name=\"fotoHistorial\" value=" . $fotoSubida . "></p>";
        echo "<p>Foto:</p><img src=\"fotoHistorial/" . $foto . "/>";
        echo "<p>Vídeo:</p><video> <source src=" . $video . "></video>";
        echo "<p><input type=\"submit\" value=\"Modificar datos\" /></p>";
    }
}
?>