<?php
function checkSession() {
    //session_start();
    if (isset($_SESSION["login"])) {
        $ok = true;
    } else {
        $ok = false;
    }
    return $ok;
}

?>