<?php
/**
 * valida que el nombre del poi sea válido
 * @param type $string nombre del poi
 * @return boolean
 */
function validateNombrePoi($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ]{2}+[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ\s]{0,48}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>