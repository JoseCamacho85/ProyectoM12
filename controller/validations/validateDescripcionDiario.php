<?php

/**
 * método que valor si el contenido de la descripción del diario es correcta
 * @param type $string string que contiene la descripción del diario
 * @return boolean
 */
function validateDescripcionDiario($string) {
    $ok = false;
    if (strlen($string) > 200) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}

?>