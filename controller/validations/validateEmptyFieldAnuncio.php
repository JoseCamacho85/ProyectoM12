<?php
/**
 * valora que no se introduzcan campos vacíos
 * @param type $text caja de texto para comprobar si está vacia
 * @return boolean
 */
function emptyField($text) {
    $validation = true;
    if (empty($text)) {
        $validation = false;
    } else {
        $validation = true;
    }
    return $validation;
}

?>
