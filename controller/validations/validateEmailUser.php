<?php
/**
 * valora si el email tiene formato correcto
 * @param type $string string que contiene el email intrudicido
 * @return boolean
 */
function validateEmail($string) {
    $ok = false;
    if (preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>