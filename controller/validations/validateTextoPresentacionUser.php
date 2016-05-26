<?php

function validateTextoPresentacion($string) {
    $ok = false;
    if (strlen($string) > 400) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}

?>