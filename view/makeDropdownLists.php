<?php

require_once '../model/functionAutoload.php';

function makeDropdownlistTipos() {
    $bitacle = unserialize($_SESSION['bitacle']);
    echo "<OPTION selected='selected'>Selecciona un tipo</OPTION>";
    for ($i = 0; $i < count($bitacle->getTipos()); $i++) {
        $nombre = $bitacle->getTipos()[$i]->getNombre();
        $id = $bitacle->getTipos()[$i]->getId();
        echo "<OPTION value='" . $id . "'>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistTransportes() {
    $bitacle = unserialize($_SESSION['bitacle']);
    echo "<OPTION selected='selected'>Selecciona un transporte</OPTION>";
    for ($i = 0; $i < count($bitacle->getTransportes()); $i++) {
        $nombre = $bitacle->getTransportes()[$i]->getNombre();
        $id = $bitacle->getTransportes()[$i]->getId();
        echo "<OPTION value='" . $id . "'>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistEntornos() {
    $bitacle = unserialize($_SESSION['bitacle']);
    echo "<OPTION selected='selected'>Selecciona un entorno</OPTION>";
    for ($i = 0; $i < count($bitacle->getEntornos()); $i++) {
        $nombre = $bitacle->getEntornos()[$i]->getNombre();
        $id = $bitacle->getEntornos()[$i]->getId();
        echo "<OPTION value='" . $id . "'>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistCiudades() {
    $bitacle = unserialize($_SESSION['bitacle']);
    echo "<OPTION selected='selected'>Selecciona una ciudad</OPTION>";
    for ($i = 0; $i < count($bitacle->getCiudades()); $i++) {
        $nombre = $bitacle->getCiudades()[$i]->getNombre();
        $id = $bitacle->getCiudades()[$i]->getId();
        echo "<OPTION value='" . $id . "'>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistPaises() {
    $bitacle = unserialize($_SESSION['bitacle']);
    echo "<OPTION selected='selected'>Selecciona un país</OPTION>";
    for ($i = 0; $i < count($bitacle->getPaises()); $i++) {
        $nombre = $bitacle->getPaises()[$i]->getNombre();
        $id = $bitacle->getPaises()[$i]->getId();
        echo "<OPTION value='" . $id . "'>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistRuta() {
    $bitacle = unserialize($_SESSION['bitacle']);
    echo "<OPTION selected='selected'>Selecciona una ruta</OPTION>";
    for ($i = 0; $i < count($bitacle->getRutas()); $i++) {
        $nombre = $bitacle->getRutas()[$i]->getNombre();
        $id = $bitacle->getRutas()[$i]->getId();
        echo "<OPTION value='" . $id . "'>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistDiarios() {
    $bitacle = unserialize($_SESSION['bitacle']);
    echo "<OPTION selected='selected'>Selecciona un diario</OPTION>";
    for ($i = 0; $i < count($bitacle->getDiarios()); $i++) {
        $nombre = $bitacle->getDiarios()[$i]->getNombre();
        $id = $bitacle->getDiarios()[$i]->getId();
        echo "<OPTION value='" . $id . "'>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistPoisUser() {
    $bitacle = unserialize($_SESSION['bitacle']);
    $user = unserialize($_SESSION['user']);
    $usuarios = $bitacle->getUsers();
    $id_usuario = cogerIdUsuario($usuarios, $user);

    echo "<OPTION selected='selected'>Selecciona un POI</OPTION>";
    for ($i = 0; $i < count($bitacle->getPois()); $i++) {
        if ($bitacle->getPois()[$i]->getId_usuario() == $id_usuario) {
            $nombre = $bitacle->getPois()[$i]->getNombre();
            $id = $bitacle->getPois()[$i]->getId();

            echo "<OPTION value='" . $id . "'>" . $nombre . "</OPTION>";
        }
    }
}

function makeDropdownlistUsers() {
    $bitacle = unserialize($_SESSION['bitacle']);
    echo "<OPTION selected='selected'>Selecciona un usuario</OPTION>";
    for ($i = 0; $i < count($bitacle->getUsers()); $i++) {
        $username = $bitacle->getUsers()[$i]->getUsername();
        $id = $bitacle->getUsers()[$i]->getId();
        echo "<OPTION value='" . $id . "'>" . $username . "</OPTION>";
    }
}

function makeDropdownlistRutasUser() {
    $bitacle = unserialize($_SESSION['bitacle']);
    $user = unserialize($_SESSION['user']);
    $usuarios = $bitacle->getUsers();
    $id_usuario = cogerIdUsuario($usuarios, $user);

    echo "<OPTION selected='selected'>Selecciona una Ruta</OPTION>";
    for ($i = 0; $i < count($bitacle->getRutas()); $i++) {
        if ($bitacle->getRutas()[$i]->getUsuario() == $id_usuario) {
            $nombre = $bitacle->getRutas()[$i]->getNombre();
            $id = $bitacle->getRutas()[$i]->getId();

            echo "<OPTION value='" . $id . "'>" . $nombre . "</OPTION>";
        }
    }
}

function makeDropdownlistDiariosUser() {
    $bitacle = unserialize($_SESSION['bitacle']);
    $user = unserialize($_SESSION['user']);
    $usuarios = $bitacle->getUsers();
    $id_usuario = cogerIdUsuario($usuarios, $user);

    echo "<OPTION selected='selected'>Selecciona un Diario</OPTION>";
    for ($i = 0; $i < count($bitacle->getDiarios()); $i++) {
        if ($bitacle->getDiarios()[$i]->getId_usuario() == $id_usuario) {
            $nombre = $bitacle->getDiarios()[$i]->getNombre();
            $id = $bitacle->getDiarios()[$i]->getId();

            echo "<OPTION value='" . $id . "'>" . $nombre . "</OPTION>";
        }
    }
}

?>