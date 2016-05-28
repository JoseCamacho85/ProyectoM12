<?php

include "../controller/controllerNombreDropdowns.php";

function makeDropdownlistArray($arrayPoi) {

    $bitacle = unserialize($_SESSION['bitacle']);
    echo "<OPTION selected='selected'>Selecciona un POI</OPTION>";
    for ($i = 0; $i < count($arrayPoi); $i++) {
        $idpoi = $arrayPoi[$i]->getIdPOI();
        $nombre = cogerNombre($bitacle->getPois(), $idpoi);
        echo "<OPTION value='" . $idpoi . "'>" . $nombre . "</OPTION>";
    }
}

function makeDropdownlistArrayHistorial($arrayPoi) {

    $bitacle = unserialize($_SESSION['bitacle']);
    echo "<OPTION selected='selected'>Selecciona un POI</OPTION>";
    for ($i = 0; $i < count($arrayPoi); $i++) {
        $idpoi = $arrayPoi[$i]->getId_poi();
        $nombre = cogerNombre($bitacle->getPois(), $idpoi);
        echo "<OPTION value='" . $idpoi . "'>" . $nombre . "</OPTION>";
    }
}

?>