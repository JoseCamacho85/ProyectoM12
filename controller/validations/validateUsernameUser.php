<?php
function validateUsername($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-]{4,15}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>