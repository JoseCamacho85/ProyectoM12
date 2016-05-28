<?php
/**
 * valida que el nombre de la población sea un nombre correcto
 * @param type $string nombre de la población
 * @return boolean
 */
function validatePoblacion($string) {
    $ok = false;
    if (strlen($string) > 50) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}
?>