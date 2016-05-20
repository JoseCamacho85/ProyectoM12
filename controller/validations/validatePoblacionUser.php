<?php
function validatePoblacion($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z\s]{0,50}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>