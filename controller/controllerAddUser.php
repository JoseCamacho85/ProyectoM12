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
include("validations/validateFotoUser.php");
include("validations/validateTextopresentacionUser.php");

//include("../view/functionShowMessage.php"); 
//include("../controller/controllerControlFindNif.php");

$bitacle = unserialize($_SESSION['bitacle']);
//$bitacle = new Bitacle("bitacle");
//if (isset($_REQUEST['submit'])) {
//Recover form data
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

if (emptyField($username) == false) {
    header("Location: ../view/errors/errorCamposVaciosUser.html");
    break;
} else if (validateUsername($username) == false) {
    header("Location: ../view/errors/errorCampoUserNameUser.html");
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
}
/* else if(validateFoto($foto)==false){
  header("Location: ../view/errors/errorCampoFotoUser.html");
  break;
  } */ else if (validateTextoPresentacion($textoPresentacion) == false) {
    header("Location: ../view/errors/errorTextoPresentacionUser.html");
    break;
}



try {
    $bitacle->insertUser(null, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion, $administrador, $registrado, $professional);
   //inicio para mandar mail al usuario
    $to = $email;
    $subject = 'bitaCle';
    $message = 'Se ha enviado un mensaje a<b> ' . $email . ' </b>para verificar la cuenta.';

    mail($to, $subject, $message);
    echo $message;
    //final para mandar mail al usuario . hay que modificar el php.ini del xampp, SMTP
} catch (Exception $e) {
    showMessage($e->getMessage());
}
?>

