<?php
/**
 * valida que el nombre del poi sea válido
 * @param type $string nombre del poi
 * @return boolean
 */
function validateNombrePoi($string) {
    $ok = false;
    if (strlen($string) > 50) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}
?>