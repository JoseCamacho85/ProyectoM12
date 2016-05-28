<?php
/**
 * valida que el url de usuario sea correcto
 * @param type $string url de usuario
 * @return boolean
 */
function validateUrl($string) {
    $ok = false;
    if (preg_match('/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$|^$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>