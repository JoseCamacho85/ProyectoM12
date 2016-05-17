<?php

session_start();
include("../model/functionAutoLoad.php");
include("validations/validateNullfields.php");
include("validations/validateNames.php");
include("validations/validateDescriptions.php");
include("validations/validateURLS.php");
include("validations/validateUsername.php");
include("validations/validatePhone.php");
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

$requiredFields = array($username,$password,$email);

/*if (validateNullfields($requiredFields)) {
 header("Location: ../view/errors/errorCamposVacios.html");
break;
}*/
/*if (controlBuscarUsername($username)) {
header("Location: ../view/errors/errorCampoUsuario.html");
break;
}*/
if (validateNames($username)) {
header("Location: ../view/errors/errorCampoUsuario.html");
break;
}
else if (validateNames($password)) {
header("Location: ../view/errors/errorCampoPassword.html");
break;
}
else if (validateDescriptions($textoPresentacion)){
header("Location: ../view/errors/errorCampoDescripcion.html");
break;
} 
else if (validateUrls($url)){
header("Location: ../view/errors/errorCampoUrl.html");
break;
}
else if (validatePhone($telefono)) {
header("Location: ../view/errors/errorCampoTelefono.html");
break;
    
} 
      
    
    try {
        $bitacle->insertUser(null, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion,$administrador,$registrado,$professional);

        //echo $username . "perfecto";
        //showMessage("Usuario ". $username ." creado correctamente");	
        //header("Location: ../index.php");
        //$_SESSION['bitacle']=serialize($bitacle);		
    } catch (Exception $e) {
        //showMessage($e->getMessage());
    }

?>

