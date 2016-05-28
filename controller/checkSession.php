<?php

/**
 * controla que la sesión existe
 * @return boolean 
 */
function checkSession() {
    if (isset($_SESSION["login"])) {
        $ok = true;
    } else {
        $ok = false;
    }
    return $ok;
}

?>