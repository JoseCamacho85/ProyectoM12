<?php
function validateNullfields($array) {   
    $ok = true; 
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == null){
            $ok = false;            
        }
    }
    return $ok;
}
