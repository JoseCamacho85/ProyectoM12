<?php

/**
 * controla que el usuario está logeado
 */
function controllerLogin() {
    if (checkSession()) {
        header("location:mainMenu.php");
    } else {
        header("location:notLogin.php");
    }
}

?>