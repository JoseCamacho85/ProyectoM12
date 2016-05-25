<?php
//include '../controller/controllerIdDropdowns.php';
include '../controller/controllerNombreDropdowns.php';

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);
$arrayDiarios = [];
$arrayHistorial = [];
$arrayResultado = [];
$arrayPois = [];
$arrayCiudades = [];

try {
    $usuarios = $bitacle->getUsers();
    $id = cogerIdUsuario($usuarios, $user);

//Query que s'ha de fer en objectes
   //select ciudad.nombre from ciudad,poi,historial,diario where historial.estaEnPoi = 1 and ciudad.id = poi.id_ciudad and diario.id_usuario = 5 

//arrayPois array de els pois del usuari
    for ($i = 0; $i <count($bitacle->getDiarios());$i++){
    	if ($bitacle->getDiarios()[$i]->getId_usuario() == $id){
    		array_push($arrayDiarios,$bitacle->getDiarios()[$i]);
    	}
    }
   
  //arrayHistorial historial dels pois marcats en visitats i del diari del usuari marcat 
  for ($i = 0; $i <count($bitacle->getHistorial());$i++){
    	if ($bitacle->getHistorial()[$i]->getEstaEnPoi() == "1"){
    		array_push($arrayHistorial,$bitacle->getHistorial()[$i]);
    	}
    }
    //arrayResultado que compara els diaris i els historials
 for ($i = 0; $i <count($arrayHistorial);$i++){
 	for ($j = 0; $j <count($arrayDiarios);$j++){
    	if ($arrayHistorial[$i]->getId_diario()== $arrayDiarios[$j]->getId()){
    		array_push($arrayResultado,$arrayHistorial[$i]);
    	}
    }
}
   
//arraysPois que tiene todos los pois del historial del usuario
  for ($i = 0; $i <count($bitacle->getPois());$i++){
 	for ($j = 0; $j <count($arrayResultado);$j++){
    	if ($arrayResultado[$j]->getId_poi()== $bitacle->getPois()[$i]->getId()){
    		array_push($arrayPois,$bitacle->getPois()[$i]);
    	}
    }
}

//arrayCiudades amb el nom de les ciutats de la array de poist
for ($i = 0; $i <count($arrayPois);$i++){
		$nomCiutat = cogerNombre($bitacle->getCiudades(), $arrayPois[$i]->getId_ciudad());
    	array_push($arrayCiudades,$nomCiutat);   	
    }


    $arrayFinal = array_unique($arrayCiudades);

    $nuevaArray = array_values($arrayFinal);

echo "<h3>"."Ciudades visitadas"."</h3>";
for ($i = 0; $i < count($nuevaArray);$i++){
	echo $nuevaArray[$i]."<br>";

    }    
echo "<br>";
   
} catch (Exception $e) {
    $e->getMessage();
}
?>