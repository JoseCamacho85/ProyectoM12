<?php

function controlFindTransporte($nombre) {
    $validation = true;
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getTransportes()); $i++) {
        if (($bitacle->getTransportes()[$i]->getNombre() == $nombre)) {
            $validation = false;
        } else {
            $validation = true;
        }
    }
    return $validation;
}

?>