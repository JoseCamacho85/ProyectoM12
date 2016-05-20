<?php
function validateIdioma($string) {
    $ok = false;
    if (preg_match('/^[a-z\s]{0,25}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>