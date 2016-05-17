<?php
function validateEmail($string) {
    $ok = false;
    if (preg_match('\'/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)'
            . '*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/\'', $string)) {
        $ok = true;
    }
    return $ok;
}
?>