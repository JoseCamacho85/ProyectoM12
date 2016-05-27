<?php
/**
 * método que valor si el contenido de la descripción del diario es correcta
 * @param type $string string que contiene la descripción del diario
 * @return boolean
 */
function validateDescripcionDiario($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ]{1}+[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ\s]{5,199}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>