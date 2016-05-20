<?php
function validateEmail($string) {
    $ok = false;
    if (preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>