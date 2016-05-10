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
/*
    <p>Nombre de usuario: <input type="text" name="username" maxlength="25" required /></p>
    <p>Contraseña: <input type="password" name="password" maxlength="25" required /></p>
    <p>E-mail: <input type="email" name="email" maxlength="50" required /></p>
    <p>Población: <input type="text" name="poblacion" maxlength="50" /></p>
    <p>Idioma: <input type="text" name="idioma" maxlength="25" /></p>
    <p>Teléfono: <input type="text" name="telefono" maxlength="11" /></p>
    <p>URL: <input type="text" name="url" maxlength="50" /></p>
    <p>Foto: <input type="text" name="foto" /></p> <!-- Ver si hay algún plugin para examinar imagen -->
    <p>Texto de presentación:</p>
    <textarea rows="4" cols="30"></textarea><br/>
    <input type="submit" value="Registrarse" name="submit"/>

*/

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


    //validators
    /*
  if(controlNif($nif)==false){
      header("Location: ../view/formErrorNIF.html");
      break;
  }
  else if(emptyField($name)==false){
      header("Location: ../view/formErrorEmptyField.html");
      break;
  }
  else if(emptyField($surname)==false){
      header("Location: ../view/formErrorEmptyField.html");
      break;
  }
  else if(emptyField($nif)==false){
      header("Location: ../view/formErrorEmptyField.html");
      break;
  }
  else if(controlFindNif($nif)==false){
      header("Location: ../view/formErrorFindNif.html");
      break;
  }*/
           
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

