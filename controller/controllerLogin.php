<?php
/**
 * 
 */
function controllerLogin() {
    if (checkSession()) {
        header("location:mainMenu.php");
    } else {
        header("location:notLogin.php");
    }
}
?>