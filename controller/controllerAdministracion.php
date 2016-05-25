<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateEmptyFieldUser.php");
include("validations/validateUsernameUser.php");
include("validations/validatePasswordUser.php");
include("validations/validateEmailUser.php");
include("validations/validatePoblacionUser.php");
include("validations/validateIdiomaUser.php");
include("validations/validateTelefonoUser.php");
include("validations/validateUrlUser.php");
include("validations/validateTextopresentacionUser.php");

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

if (isset($_REQUEST['modificarUser']) || isset($_REQUEST['eliminarUser'])) {
    
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
        if (emptyField($username) == false) {
            header("Location: ../view/errors/errorCamposVaciosUser.html");
            break;
        } else if (validateUsername($username) == false) {
            header("Location: ../view/errors/errorCampoUserNameUser.html");
            break;
        } else if (controlFindUser($username) == false) {
            header("Location: ../view/errors/errorCampoUsernameExisteUser.html");
            break;
        } else if (emptyField($password) == false) {
            header("Location: ../view/errors/errorCamposVaciosUser.html");
            break;
        } else if (validatePassword($password) == false) {
            header("Location: ../view/errors/errorCampoPasswordUser.html");
            break;
        } else if (emptyField($email) == false) {
            header("Location: ../view/errors/errorCamposVaciosUser.html");
            break;
        } else if (validateEmail($email) == false) {
            header("Location: ../view/errors/errorCampoEmailUser.html");
            break;
        } else if (controlFindEmail($email) == false) {
            header("Location: ../view/errors/errorCampoEmailExisteUser.html");
            break;
        } else if (validatePoblacion($poblacion) == false) {
            header("Location: ../view/errors/errorCampoPoblacionUser.html");
            break;
        } else if (validateIdioma($idioma) == false) {
            header("Location: ../view/errors/errorCampoIdiomaUser.html");
            break;
        } else if (validateTelefono($telefono) == false) {
            header("Location: ../view/errors/errorCampoTelefonoUser.html");
            break;
        } else if (validateUrl($url) == false) {
            header("Location: ../view/errors/errorCampoUrlUser.html");
            break;
        } else if (validateTextoPresentacion($textoPresentacion) == false) {
            header("Location: ../view/errors/errorTextoPresentacionUser.html");
            break;
        }
        try {
            $bitacle->modificarDatosUsuario($id_user, $username, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion);

            echo $username . " modificado";

            $_SESSION['bitacle'] = serialize($bitacle);
        } catch (Exception $e) {
            showMessage($e->getMessage());
        }
        header("Location: ../view/administracion.php");
        echo "No modificado";
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
        echo "No eliminado";
    }
} else {
    echo "No has hecho submit";
}
?>