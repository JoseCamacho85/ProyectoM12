<?php

/**
 * método que valora si la descripción del anuncio está en un formato correcto
 * @param type $string string que contiene la descripcion del anuncio
 * @return boolean
 */
function validateDescripcionAnuncio($string) {
    $ok = false;
    if (strlen($string) > 200) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}

?>