<?php

session_start();
include("../model/functionAutoLoad.php");

$bitacle = unserialize($_SESSION['bitacle']);

$poi = $bitacle->getUsers();

$id_com = $_POST["data"];

$resultado = "";

for ($i = 0; $i < count($bitacle->getUsers()); $i++) {

    if ($bitacle->getUsers()[$i]->getId() == $id_com) {
        $resultado = $resultado . "|" . $username = $bitacle->getUsers()[$i]->getUsername();
        $resultado = $resultado . "|" . $password = $bitacle->getUsers()[$i]->getPassword();
        $resultado = $resultado . "|" . $email = $bitacle->getUsers()[$i]->getEmail();
        $resultado = $resultado . "|" . $poblacion = $bitacle->getUsers()[$i]->getPoblacion();
        $resultado = $resultado . "|" . $idioma = $bitacle->getUsers()[$i]->getIdioma();
        $resultado = $resultado . "|" . $telefono = $bitacle->getUsers()[$i]->getTelefono();
        $resultado = $resultado . "|" . $url = $bitacle->getUsers()[$i]->getUrl();
        $resultado = $resultado . "|" . $foto = $bitacle->getUsers()[$i]->getFoto();
        $resultado = $resultado . "|" . $textoPresentacion = $bitacle->getUsers()[$i]->getTextoPresentacion();

        echo $resultado;
    } else {
        echo null;
    }
}
?>