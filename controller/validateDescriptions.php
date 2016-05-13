<?php
function validateDescriptions($string) {
    $ok = false;
    if (preg_match('/^[a-z\d\s]{1,250}$/i', $string)) {
        $ok = true;
    }
    return $ok;
}
?>