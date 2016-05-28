<?php

session_start();
include("../model/functionAutoLoad.php");

$bitacle = unserialize($_SESSION['bitacle']);

$poi = $bitacle->getPois();

$id_com = $_POST["data"];
$resultado = "";

for ($i = 0; $i < count($bitacle->getPois()); $i++) {
    if ($bitacle->getPois()[$i]->getId() == $id_com) {

        $resultado = $resultado . $bitacle->getPois()[$i]->getNombre();
        $resultado = $resultado . "|" . $bitacle->getPois()[$i]->getFoto();
        $resultado = $resultado . "|" . $bitacle->getPois()[$i]->getDescripcion();
        $resultado = $resultado . "|" . $bitacle->getPois()[$i]->getUrl();
        $resultado = $resultado . "|" . $bitacle->getPois()[$i]->getPrecio();
        $resultado = $resultado . "|" . $bitacle->getPois()[$i]->getHorario();

        echo $resultado;
    } else {
        echo null;
    }
}
?>