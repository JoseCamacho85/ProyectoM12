<?php

session_start();
include("../model/functionAutoLoad.php");
//include("../model/Business/classBitacle.php");
//include("../controller/controllerControlEmptyField.php");
//include("../controller/controllerControlNIF.php");
//include("../view/functionShowMessage.php"); 
//include("../controller/controllerControlFindNif.php");

$bitacle = unserialize($_SESSION['bitacle']);
//$bitacle = new Bitacle("bitacle");

if (isset($_REQUEST['submit'])) {
    //Recover form data
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $poblacion = $_REQUEST['poblacion'];
    $idioma = $_REQUEST['idioma'];
    $telefono = $_REQUEST['telefono'];
    $url = $_REQUEST['url'];
    $foto = $_REQUEST['foto'];
    $textoPresentacion = $_REQUEST['textoPresentacion'];
    $professional = 0;
    $usuario = 0;
    if(isset($_REQUEST['profesional'])){
        $professional = 1;
    }else{
        $usuario = 1;
    }
    /*echo $professional;
    echo $usuario;*/
    
    
    

    try {
        $bitacle->insertUser(null,$username, $password,$email,$poblacion,$idioma,
                $telefono,$url,$foto,$textoPresentacion);

        //echo $username . "perfecto";

        //showMessage("Usuario ". $username ." creado correctamente");	
        //header("Location: ../index.php");
        //$_SESSION['bitacle']=serialize($bitacle);		
    } catch (Exception $e) {
        //showMessage($e->getMessage());
    }
}
?>

