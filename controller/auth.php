<?php

session_start();
//Includes
include("../model/functionAutoLoad.php");
//include("validateUser.php");
//include("createCookie.php");
//include("deleteCookie.php");
//include("../view/printInvalidMessage.php");
//include("../securimage/securimage.php");

$bitacle = unserialize($_SESSION['bitacle']);

//$securimage = new Securimage();
//crea les cookies si el usuari vol recordar i sino les esborra
/* if (isset($_POST['rememberUser'])) {
  createCookie("username", $_POST['username']);
  } else {
  deleteCookie("username", $_POST['username']);
  } */

//valida si el usuari es correcte (admin, 1234) [Controlador]
//if (isset($_POST['login'])) {
if ($bitacle->validateUser($_POST['username'], $_POST['password'])) {
    /* if ($securimage->check($_POST['captcha_code']) == false) {
      // the code was incorrect
      // you should handle the error so that the form processor doesn't continue
      // or you can use the following code if there is no validation or you do not know how
      echo "The security code entered was incorrect.<br /><br />";
      echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
      exit;
      } */
    $_SESSION["login"] = true;
    $user = $_POST['username'];
    echo $user . " ingresó correctamente";
    $_SESSION['user'] = serialize($user);
    //$_SESSION['user'] = serialize($bitacle);
    header("Location: ../index.php");
} else {
    //$_SESSION["user"] = "";
    echo "INVALIDO";
    session_destroy();
    //Print de missatges [View]
    //printInvalidMessage();
}
//$_SESSION["login"] = true;
//$_SESSION["user"] = $_POST['username'];
//header("Location: ../view/showMenu.php");
//}
?>