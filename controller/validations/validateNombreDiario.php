<?php
function validateNombreDiario($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-]{2,50}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>