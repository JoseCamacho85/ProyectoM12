<?php
function validateTextoPresentacion($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z\d\s]{0,400}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>