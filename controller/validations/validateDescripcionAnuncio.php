<?php
/**
 * método que valora si la descripción del anuncio está en un formato correcto
 * @param type $string string que contiene la descripcion del anuncio
 * @return boolean
 */
function validateDescripcionAnuncio($string) {
    $ok = false;
    if (preg_match('/^[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ]{2}+[a-zA-Z0-9_-ÀÁÈÉÌÍÒÓÙÚàáèéìíòóùúñ\s]{0,198}$/', $string)) {
        $ok = true;
    }
    return $ok;
    
}

// OTRA MANERA DE VALIDAR SIN EXPRESIÓN REGULAR (MÍNIMO 2 CARÁCTERES Y MÁXIMO 200)
//function validateDescripcionAnuncio($string) {
//    $ok = false;
//    if (strlen($string) < 2) {
//        $ok = false;
//    } else {
//        $ok = true;
//    }
//    if (strlen($string) > 200) {
//        $ok = false;
//    } else {
//        $ok = true;
//    }
//    return $ok;
//}
?>