<?php
/**
 * método que valor si el contenido de la descripción de la ruta es correcta
 * @param type $string string que contiene la descripción de la ruta
 * @return boolean
 */
function validateDescripcionRuta($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ]{1}+[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ\s]{0,199}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>