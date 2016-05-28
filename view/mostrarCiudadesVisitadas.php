<?php

//include '../controller/controllerIdDropdowns.php';
include '../controller/controllerNombreDropdowns.php';

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);
$arrayDiarios = [];
$arrayHistorial = [];
$arrayResultado = [];
$arrayPois = [];
$arrayCiudades = [];

try {
    $usuarios = $bitacle->getUsers();
    $id = cogerIdUsuario($usuarios, $user);

    for ($i = 0; $i < count($bitacle->getDiarios()); $i++) {
        if ($bitacle->getDiarios()[$i]->getId_usuario() == $id) {
            array_push($arrayDiarios, $bitacle->getDiarios()[$i]);
        }
    }

    for ($i = 0; $i < count($bitacle->getHistorial()); $i++) {
        if ($bitacle->getHistorial()[$i]->getEstaEnPoi() == "1") {
            array_push($arrayHistorial, $bitacle->getHistorial()[$i]);
        }
    }

    for ($i = 0; $i < count($arrayHistorial); $i++) {
        for ($j = 0; $j < count($arrayDiarios); $j++) {
            if ($arrayHistorial[$i]->getId_diario() == $arrayDiarios[$j]->getId()) {
                array_push($arrayResultado, $arrayHistorial[$i]);
            }
        }
    }

    for ($i = 0; $i < count($bitacle->getPois()); $i++) {
        for ($j = 0; $j < count($arrayResultado); $j++) {
            if ($arrayResultado[$j]->getId_poi() == $bitacle->getPois()[$i]->getId()) {
                array_push($arrayPois, $bitacle->getPois()[$i]);
            }
        }
    }

    for ($i = 0; $i < count($arrayPois); $i++) {
        $nomCiutat = cogerNombre($bitacle->getCiudades(), $arrayPois[$i]->getId_ciudad());
        array_push($arrayCiudades, $nomCiutat);
    }


    $arrayFinal = array_unique($arrayCiudades);

    $nuevaArray = array_values($arrayFinal);

    for ($i = 0; $i < count($nuevaArray); $i++) {
        echo $nuevaArray[$i] . "<br>";
    }
} catch (Exception $e) {
    $e->getMessage();
}
?>