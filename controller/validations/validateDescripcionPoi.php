<?php

/**
 * método que valora si la descripción introducida cumple los valores establecidos
 * @param type $string string que contiene una descripción
 * @return boolean
 */
function validateDescripcion($string) {
    $ok = false;
    if (strlen($string) > 200) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}
?>

