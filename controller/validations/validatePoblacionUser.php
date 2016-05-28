<?php
/**
 * valida que el nombre de la población sea un nombre correcto
 * @param type $string nombre de la población
 * @return boolean
 */
function validatePoblacion($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ]{2}+[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ\s]{0,48}$|^$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>