<?php
function validatePassword($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-]{6,10}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>