<?php
/**
 * valida que el nuevo tipo de poi a introducir exista para no introducir valores duplicados
 * @param type $nombre tipo que se ha de validar
 * @return boolean
 */
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