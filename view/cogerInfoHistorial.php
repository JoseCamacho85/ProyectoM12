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

        echo "<br><div class="."cuadro".">";
        echo "<p class="."titulos".">".$nombre . "</p>";
        echo "<p><img src=\"fotoPoi/$foto\"/>" . "</p>";   
        echo "<p><span class="."titulos".">Descripción: </span>" . $descripcion . "</p>";
        echo "<p><span class="."titulos".">URL: </span><a href=" . $url . " target=\"_blank\">$url</a></p>";
        echo "<p><span class="."titulos".">Precio: </span>" . $precio . "</p>";
        echo "<p><span class="."titulos".">Horario: </span>" . $horario . "</p>";
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

        echo "<hr><h3><center>Historial</center></h3>";
        echo "<input type=\"hidden\" name=\"poi\" value=" . $id_com . ">";
        echo "<input type=\"hidden\" name=\"diario\" value=" . $id_diario . ">";
        echo "<p><span class="."titulos".">Fecha visita: </span><input name=\"fechaVisitaPoi\" type=\"date\" value=" . $fechaVisitaPoi . "></p>";
        echo "<p><span class="."titulos".">¿Se ha visitado?: </span><input name=\"estaEnPoi\" type=\"checkbox\" $checked value=" . $estaEnPoi . "></p>";
        echo "<p><span class="."titulos".">Texto: </span></p><textarea rows=\"5\" cols=\"25\" name=\"textoHistorial\">$texto</textarea>";
        echo "<p><span class="."titulos".">Vídeo: </span><input type=\"text\" name=\"video\" value=" . $video . ">";
        echo "<div class=\"centrar\"><p><input type=\"submit\" name=\"mostrarInfo\" value=\"Modificar datos\" class=\"btn btn-info\"/></p></div>";
        echo "</div>";
    }
}
?>