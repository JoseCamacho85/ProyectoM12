<?php
/**
 * valora que la hora introducida es correcta
 * @param type $string string que contien la descripción de la hora
 * @return boolean
 */
function validateHour($string) {
    $ok = false;
    if (preg_match('/^(0[1-9]|1\d|2[0-3]):([0-5]\d)$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>