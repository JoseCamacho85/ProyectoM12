<?php
function validateAlfanumericName($string){
    resultado(preg_match('/^[a-z\d_]{4,25}$/i', $nombre));
}


?>