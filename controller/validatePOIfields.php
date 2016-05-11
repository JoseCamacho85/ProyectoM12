<?php

function validatePOIfields($array) {
    for($i = 0; $i < count($array); $i++){
        if($fields[$i] != null){
            $arr[$i] .= $fields[$i];
        }
    }
}
