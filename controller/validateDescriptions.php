<?php

function validateDescriptions($string) {
    $ok = false;
    if (preg_match('{1,250}', $string)) {
        $ok = true;
    }
    return $ok;
}
?>