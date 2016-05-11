<?php

require_once '../model/functionAutoload.php';

function makeDropdownlistCiudades() {
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getCiudades()); $i++) {
        $nombre = $bitacle->getCiudades()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}

?>