<?php
/**
 * valida que el nombre del anuncio es correcto
 * @param type $string nombre del anuncio
 * @return boolean
 */
function validateNombreAnuncio($string) {
    $ok = false;
    if (strlen($string) > 50) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}
?>