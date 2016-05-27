<?php
/**
 * método que valora si la descripción introducida cumple los valores establecidos
 * @param type $string string que contiene una descripción
 * @return boolean
 */
function validateDescripcion($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ]{1}+[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ\s]{5,199}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>

