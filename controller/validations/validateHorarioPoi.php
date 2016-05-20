<?php
function validateHorario($string) {
    $ok = false;
    if (preg_match('/^[a-z\d\s]{0,200}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>