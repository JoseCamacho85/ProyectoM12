<?php

function validateTexto($string) {
    $ok = false;
    if (strlen($string) > 200) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}

?>