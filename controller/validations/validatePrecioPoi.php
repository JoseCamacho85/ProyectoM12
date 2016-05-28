<?php
/**
 * valida que la descripcion del precio sea correcta
 * @param type $string descripción del precio
 * @return boolean
 */
function validatePrecio($string) {
    $ok = false;
    if (strlen($string) > 200) {
        $ok = false;
    } else {
        $ok = true;
    }
    return $ok;
}
?>