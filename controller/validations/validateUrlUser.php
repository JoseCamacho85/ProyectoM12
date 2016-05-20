<?php
function validateUrl($string) {
    $ok = false;
    if (preg_match('/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$|^$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>