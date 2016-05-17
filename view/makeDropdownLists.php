<?php

require_once '../model/functionAutoload.php';

function makeDropdownlistTipos() {
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getTipos()); $i++) {
        $nombre = $bitacle->getTipos()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistTransportes() {
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getTransportes()); $i++) {
        $nombre = $bitacle->getTransportes()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistEntornos() {
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getEntornos()); $i++) {
        $nombre = $bitacle->getEntornos()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistCiudades() {
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getCiudades()); $i++) {
        $nombre = $bitacle->getCiudades()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistPaises() {
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getPaises()); $i++) {
        $nombre = $bitacle->getPaises()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistRuta() {
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getRutas()); $i++) {
        $nombre = $bitacle->getRutas()[$i]->getNombre();
        $id = $bitacle->getRutas()[$i]->getId();
        echo "<OPTION value='".$id."'>" . $nombre . "</OPTION>";
    }
}


?>