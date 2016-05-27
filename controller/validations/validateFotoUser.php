<?php
/**
 * valida que los valores introducidos son correctos
 * @param type $string nombre de la foto a valorar
 * @return boolean
 */
function validateFoto($string) {
    $ok = false;
    if (preg_match('/^[a-z\d\s]{0,100}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>