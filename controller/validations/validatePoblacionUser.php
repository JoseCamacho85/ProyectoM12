<?php
function validatePoblacion($string) {
    $ok = false;
    if (preg_match('/^[a-z\s]{0,50}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>