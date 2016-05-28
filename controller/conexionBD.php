<?php

$mysqli = new mysqli("localhost", "root", "", "bitaclebd");

if ($mysqli->connect_error) {
    printf("<hr>Connect failed (Err. nº %d): %s<hr/>", $mysqli->connect_errno, $mysqli->connect_error);
    exit();
}

if (!$mysqli->set_charset("utf8")) {
    printf("<hr>Error loading character set utf8 (Err. nº %d): %s\n<hr/>", $mysqli->errno, $mysqli->error);
    exit();
}

$tbUsuarios = "usuarios";
?>