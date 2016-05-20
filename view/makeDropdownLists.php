<?php

require_once '../model/functionAutoload.php';
//include("../controller/controllerIdDropdowns.php");
//include "../controller/controllerNombreDropdowns.php";

function makeDropdownlistTipos() {
    $bitacle = unserialize($_SESSION['bitacle']);
 echo "<OPTION selected='selected'>Selecciona un tipo</OPTION>";
    for ($i = 0; $i < count($bitacle->getTipos()); $i++) {
        $nombre = $bitacle->getTipos()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistTransportes() {
    $bitacle = unserialize($_SESSION['bitacle']);
 echo "<OPTION selected='selected'>Selecciona un transporte</OPTION>";
    for ($i = 0; $i < count($bitacle->getTransportes()); $i++) {
        $nombre = $bitacle->getTransportes()[$i]->getNombre();
       
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistEntornos() {
    $bitacle = unserialize($_SESSION['bitacle']);
 echo "<OPTION selected='selected'>Selecciona un entorno</OPTION>";
    for ($i = 0; $i < count($bitacle->getEntornos()); $i++) {
        $nombre = $bitacle->getEntornos()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistCiudades() {
    $bitacle = unserialize($_SESSION['bitacle']);
 echo "<OPTION selected='selected'>Selecciona una ciudad</OPTION>";
    for ($i = 0; $i < count($bitacle->getCiudades()); $i++) {
        $nombre = $bitacle->getCiudades()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistPaises() {
    $bitacle = unserialize($_SESSION['bitacle']);
 echo "<OPTION selected='selected'>Selecciona un país</OPTION>";
    for ($i = 0; $i < count($bitacle->getPaises()); $i++) {
        $nombre = $bitacle->getPaises()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistRuta() {
    $bitacle = unserialize($_SESSION['bitacle']);
 echo "<OPTION selected='selected'>Selecciona una ruta</OPTION>";
    for ($i = 0; $i < count($bitacle->getRutas()); $i++) {
        $nombre = $bitacle->getRutas()[$i]->getNombre();
        $id = $bitacle->getRutas()[$i]->getId();
        echo "<OPTION value='".$id."'>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistDiarios() {
    $bitacle = unserialize($_SESSION['bitacle']);
 echo "<OPTION selected='selected'>Selecciona un diario</OPTION>";
    for ($i = 0; $i < count($bitacle->getDiarios()); $i++) {
        $nombre = $bitacle->getDiarios()[$i]->getNombre();
        $id = $bitacle->getDiarios()[$i]->getId();
        echo "<OPTION value='".$id."'>" . $nombre . "</OPTION>";
    }
}
function makeDropdownlistPoisAnuncio() {
    $bitacle = unserialize($_SESSION['bitacle']);
    $user = unserialize($_SESSION['user']);
    $usuarios = $bitacle->getUsers();
    $id_usuario = cogerIdUsuario($usuarios, $user);

 echo "<OPTION selected='selected'>Selecciona un POI</OPTION>";
    for ($i = 0; $i < count($bitacle->getPois()); $i++) {
        if ($bitacle->getPois()[$i]->getId_usuario() == $id_usuario){
        $nombre = $bitacle->getPois()[$i]->getNombre();
        $id = $bitacle->getPois()[$i]->getId();

        echo "<OPTION value='".$id."'>" . $nombre . "</OPTION>";
    }
    }
}




?>