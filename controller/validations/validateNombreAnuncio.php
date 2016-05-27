<?php
/**
 * valida que el nombre del anuncio es correcto
 * @param type $string nombre del anuncio
 * @return boolean
 */
function validateNombreAnuncio($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ]{2}+[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ\s]{0,48}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>