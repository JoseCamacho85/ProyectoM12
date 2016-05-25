<?php
function validateDescripcionAnuncio($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z\d\s]{5,200}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>