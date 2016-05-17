<?php
function validatePhone($string) {
    $ok = false;
    if (preg_match('/^[+]?[0-9]{2,2}[.]?[0-9]{9,9}$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>
