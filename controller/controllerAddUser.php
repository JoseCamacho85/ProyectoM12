<?php

session_start();
include("../model/functionAutoLoad.php");
include("validations/validateEmptyFieldUser.php");
include("validations/validateUsernameUser.php");
include("validations/validatePasswordUser.php");
include("validations/validateEmailUser.php");
include("validations/validatePoblacionUser.php");
include("validations/validateIdiomaUser.php");
include("validations/validateTelefonoUser.php");
include("validations/validateUrlUser.php");
include("validations/validateTextopresentacionUser.php");
include("validations/validateEmailExistsUser.php");
include("validations/validateUserExistsUser.php");

//include("../view/functionShowMessage.php"); 
//include("../controller/controllerControlFindNif.php");

$bitacle = unserialize($_SESSION['bitacle']);
//$bitacle = new Bitacle("bitacle");
//if (isset($_REQUEST['submit'])) {
//Recover form data
if (isset($_REQUEST["submit"])) {

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $poblacion = $_REQUEST['poblacion'];
    $idioma = $_REQUEST['idioma'];
    $telefono = $_REQUEST['telefono'];
    $url = $_REQUEST['url'];
    $foto = $_REQUEST['fotoUser'];
    $textoPresentacion = $_REQUEST['textoPresentacion'];
    $professional = 0;
    $registrado = 1;
    $administrador = 0;

    if (isset($_REQUEST['profesional'])) {
        $professional = 1;
    } else {
        $professional = 0;
    }

    include 'validations/validateAddUser.php';

    try {
        $bitacle->insertUser(null, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion, $administrador, $registrado, $professional);
        header("Location: ../index.php");
//inicio para mandar mail al usuario
        /* $to = $email;
          $subject = 'bitaCle';
          $message = 'Se ha enviado un mensaje a<b> ' . $email . ' </b>para verificar la cuenta.';

          mail($to, $subject, $message);
          echo $message; */
//final para mandar mail al usuario . hay que modificar el php.ini del xampp, SMTP
    } catch (Exception $e) {
        showMessage($e->getMessage());
    }
} else {
    echo "no has hecho submit";
}
?>