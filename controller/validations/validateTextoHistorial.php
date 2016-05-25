<?php

function validateTexto($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚÑàáèéìíòóùúñ]{1}+[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚÑàáèéìíòóùúñ\s]{5,199}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>