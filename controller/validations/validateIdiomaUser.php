<?php
/**
 * valora que el idioma introducido es correcto
 * @param type $string contiene el nombre del idioma
 * @return boolean
 */
function validateIdioma($string) {
    $ok = false;
    if (strlen($string) > 25) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}
?>