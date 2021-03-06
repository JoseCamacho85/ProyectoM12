<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("./validations/validateDescripcionAnuncio.php");
include("./validations/validateNombreAnuncio.php");
include("./validations/validateEmptyFieldAnuncio.php");

if (isset($_REQUEST['crearAnuncio']) || isset($_REQUEST['modificarAnuncio'])) {

    $bitacle = unserialize($_SESSION['bitacle']);
    $user = unserialize($_SESSION['user']);
    $titulo = $_REQUEST['tituloAnuncio'];
    $descripcion = $_REQUEST['descripcionAnuncio'];
    $imagen = $_REQUEST['imagenAnuncio'];
    $usuarios = $bitacle->getUsers();
    $id_usuario = cogerIdUsuario($usuarios, $user);
    $id_poi = $_REQUEST['POIAnuncio'];

    include 'validations/validateAddAnuncio.php';

    if (isset($_REQUEST["crearAnuncio"])) {
        try {
            $bitacle->insertAnuncio(null, $titulo, $descripcion, $imagen, $id_poi, $id_usuario);

            echo $titulo . "perfecto";

            $_SESSION['bitacle'] = serialize($bitacle);
        } catch (Exception $e) {
            showMessage($e->getMessage());
        }
        header("Location: ../view/addAnuncio.php");
    }

    if (isset($_REQUEST["modificarAnuncio"])) {
        try {
            $bitacle->modificarAnuncio($titulo, $descripcion, $imagen, $id_poi, $id_usuario);
            include("../view/modules/refresh.php");
            echo $titulo . "perfecto";
        } catch (Exception $e) {
            showMessage($e->getMessage());
        }
        header("Location: ../view/addAnuncio.php");
    } else {
        echo "Required fields";
    }
} else {
    echo "No has hecho submit";
}
?>