<?php

session_start();
include("../model/functionAutoLoad.php");
//include("../controller/controllerIdDropdowns.php");
$bitacle = unserialize($_SESSION['bitacle']);
//$ciudad = $bitacle->getCiudades();
//$pais = $bitacle->getPaises();
$poi = $bitacle->getPois();

$id_com = $_POST["data"];

//$aux = cogerId($pais, $id_com);

for ($i = 0; $i < count($bitacle->getPois()); $i++) {

    if ($bitacle->getPois()[$i]->getId() == $id_com) {
        $nombre = $bitacle->getPois()[$i]->getNombre();
        $foto = $bitacle->getPois()[$i]->getFoto();
        $descripcion = $bitacle->getPois()[$i]->getDescripcion();
        $url = $bitacle->getPois()[$i]->getUrl();
        $precio = $bitacle->getPois()[$i]->getPrecio();
        $horario = $bitacle->getPois()[$i]->getHorario();

        echo $nombre."<br>";
        echo $foto."<br>";
        echo $descripcion."<br>";
        echo $url."<br>";
        echo $precio."<br>";
        echo $horario."<br>";
        

    }
}
?>