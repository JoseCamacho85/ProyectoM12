<?php
function validateFoto($string) {
    $ok = false;
    if (preg_match('/^[a-z\d\s]{0,100}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>