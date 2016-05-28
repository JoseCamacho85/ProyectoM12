<?php
/**
 * valida que el texto del historial sea correcto
 * @param type $string historial de lugares visitados
 * @return boolean
 */
function validateTexto($string) {
    $ok = false;
    if (strlen($string) > 200) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}

?>