<?php
/**
 * valida que el numero de telefono sea válido
 * @param type $string numero de telefono
 * @return boolean
 */
function validateTelefono($string) {
    $ok = false;
    if (preg_match('/^[0-9]{9}$|^$/', $string)) {
        $ok = true;
    }
    return $ok;
}
///^[+]?[0-9]{2,2}[.]?[0-9]{9,9}$/
?>