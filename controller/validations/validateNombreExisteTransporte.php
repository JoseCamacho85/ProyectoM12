<?php
/**
 * controla que los transportes no se introduzcan duplicados
 * @param type $nombre nombre del transporte a valorar
 * @return boolean
 */
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