<?php
function validateDescripcionDiario($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z\d\s]{0,200}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>