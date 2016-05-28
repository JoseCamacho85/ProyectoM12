<?php
/**
 * valida que la contraseña esté dentro de los parametros establecidos
 * @param type $string contraseña del usuario
 * @return boolean
 */
function validatePassword($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9]{6,10}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>