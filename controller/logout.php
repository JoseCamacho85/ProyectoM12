<?php

session_start();
/**
 * destruye la sesion existente
 */
session_destroy();
header("Location: ../index.php");
?>