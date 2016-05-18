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

        echo "Nombre : ".$nombre."<br>";
        echo "Foto : "."<img src=\"fotoPoi/$foto\"/>"."<br>";
        echo "Descripción : ".$descripcion."<br>";
        echo "URL : ".$url."<br>";
        echo "Precio : ".$precio."<br>";
        echo "Horario : ".$horario."<br>";
        

    }
}
?>