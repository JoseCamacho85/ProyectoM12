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
    $nombre = $_REQUEST['nombre'];          
    $descripcion = $_REQUEST['descripcion'];               
    $id_usuario = $_REQUEST['id_usuario'];                 
           
	try {	
		$bitacle->insertDiario(null,$nombre,$descripcion,$id_usuario);
    
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

