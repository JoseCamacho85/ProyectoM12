<?php
function validateIdioma($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z\s]{0,25}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>