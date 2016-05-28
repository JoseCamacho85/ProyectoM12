<?php
/**
 * controla que el array de elementos no esté vacío
 * @param type $array coleccion de elementos
 * @return boolean
 */
function validateNullfields($array) {   
    $ok = true; 
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == null){
            $ok = false;            
        }
    }
    return $ok;
}
