<?php

/**
 * valida que la direccion web del poi sea correcta
 * @param type $string dirección web del poi
 * @return boolean
 */
function validateUrls($string) {
    $ok = false;
    if (strlen($string) > 400) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
//    $ok = false;
//    if (preg_match('/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$|^$/', $string)) {
//        $ok = true;
//    }
//    return $ok;
}

?>