<?php

/**
 * valora que la descripción del horario es correcta
 * @param type $string descripcion del horario
 * @return boolean
 */
function validateHorario($string) {
    $ok = false;
    if (strlen($string) > 200) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}

?>