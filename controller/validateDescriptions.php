<?php
function validateDescriptions($string) {
    $ok = false;
    if (preg_match('[a-zA-Z0-9]{1,250}', $string)) {
        $ok = true;
    }
    return $ok;
}
?>