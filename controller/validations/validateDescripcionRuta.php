<?php

/**
 * método que valor si el contenido de la descripción de la ruta es correcta
 * @param type $string string que contiene la descripción de la ruta
 * @return boolean
 */
function validateDescripcionRuta($string) {
    $ok = false;
    if (strlen($string) > 200) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}

?>