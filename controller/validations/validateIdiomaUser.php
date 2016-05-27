<?php
/**
 * valora que el idioma introducido es correcto
 * @param type $string contiene el nombre del idioma
 * @return boolean
 */
function validateIdioma($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ]{2}+[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ\s]{0,23}$|^$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>