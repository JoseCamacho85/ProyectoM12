<?php
/**
 * valida que el nombre de la ruta sea válido
 * @param type $string nombre de la ruta
 * @return boolean
 */
function validateNombreRuta($string) {
    $ok = false;
    if (strlen($string) > 25) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}
?>