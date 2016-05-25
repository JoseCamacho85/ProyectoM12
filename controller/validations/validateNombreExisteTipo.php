<?php

function controlFindTipo($nombre) {
    $validation = true;
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getTipos()); $i++) {
        if (($bitacle->getTipos()[$i]->getNombre() == $nombre)) {
            $validation = false;
        } else {
            $validation = true;
        }
    }
    return $validation;
}

?>