<?php
/**
 * valida que el nombre del diario es correcto
 * @param type $string nombre del diario
 * @return boolean
 */
function validateNombreDiario($string) {
    $ok = false;
    if (strlen($string) > 50) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}
?>