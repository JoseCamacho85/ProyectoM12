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
           
	try {	
		$bitacle->insertUser(null,$_REQUEST['username'],$_REQUEST['password'],$_REQUEST['email'],$_REQUEST['poblacion'],$_REQUEST['idioma'],$_REQUEST['telefono'],$_REQUEST['url'],$_REQUEST['foto'],$_REQUEST['textoPresentacion']);
    
    echo $username."perfecto";

		//showMessage("Usuario ". $username ." creado correctamente");	
		//header("Location: ../index.php");
		//$_SESSION['bitacle']=serialize($bitacle);		
	}	
	catch (Exception $e) {
		showMessage($e->getMessage());		
	}        
}
?>

