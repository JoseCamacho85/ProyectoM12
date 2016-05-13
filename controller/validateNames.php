<?php
function validateNames($string) {
    $ok = false;
    if (preg_match('/^[a-z\d\s]{4,25}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>