<?php
function validateDescripcionRuta($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-]{0,200}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>