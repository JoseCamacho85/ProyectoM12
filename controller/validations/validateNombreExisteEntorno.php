<?php
/**
 * mira que el entorno introducido no exista
 * @param type $nombre nombre del entorno
 * @return boolean
 */
function controlFindEntorno($nombre) {
    $validation = true;
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getEntornos()); $i++) {
        if (($bitacle->getEntornos()[$i]->getNombre() == $nombre)) {
            $validation = false;
        } else {
            $validation = true;
        }
    }
    return $validation;
}

?>