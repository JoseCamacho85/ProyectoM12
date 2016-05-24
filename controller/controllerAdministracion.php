<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");


$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

//if (isset($_REQUEST['submit'])) {
//Recover form data
$id_user = $_REQUEST['selectedUser'];
$username = $_REQUEST['usernameUser'];
$password = $_REQUEST['passwordUser'];
$email = $_REQUEST['emailUser'];
$poblacion = $_REQUEST['poblacionUser'];
$idioma = $_REQUEST['idiomaUser'];
$telefono = $_REQUEST['telefonoUser'];
$url = $_REQUEST['urlUser'];
$foto = $_REQUEST['fotoUser'];
$textoPresentacion = $_REQUEST['textoPresentacionUser'];


if (isset($_REQUEST['modificarUser'])) {
    try {
        $bitacle->modificarDatosUsuario($id_user, $username, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion);

        echo $username . " modificado";

        $_SESSION['bitacle'] = serialize($bitacle);
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
    header("Location: ../view/administracion.php");
    echo "no modificado";
}

if (isset($_REQUEST['eliminarUser'])) {
    try {
        $bitacle->eliminarUser($id_user);
        $_SESSION['bitacle'] = serialize($bitacle);
        echo $username . " eliminado";
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }

    header("Location: ../view/administracion.php");
        echo "no eliminado";

}
?>