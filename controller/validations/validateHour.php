<?php
function validateHour($string) {
    $ok = false;
    if (preg_match('/^(0[1-9]|1\d|2[0-3]):([0-5]\d)$/', $string)) {
        $ok = true;
    }
    return $ok;
}
?>