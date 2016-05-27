<?php
/**
 * valora que la descripción del horario es correcta
 * @param type $string descripcion del horario
 * @return boolean
 */
function validateHorario($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ]{1}+[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ\s]{0,199}$|^$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>