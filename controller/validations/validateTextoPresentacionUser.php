<?php
/**
 * valida que el texto de presentacion del usiario sea correcto
 * @param type $string texto de presentacion del usuario
 * @return boolean
 */
function validateTextoPresentacion($string) {
    $ok = false;
    if (strlen($string) > 400) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}

?>