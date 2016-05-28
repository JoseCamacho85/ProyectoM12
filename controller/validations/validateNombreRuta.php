<?php
/**
 * valida que el nombre de la ruta sea válido
 * @param type $string nombre de la ruta
 * @return boolean
 */
function validateNombreRuta($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-]{2,50}/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>