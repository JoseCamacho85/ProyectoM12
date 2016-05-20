<?php
session_start();
include("../model/functionAutoLoad.php");

$bitacle = unserialize($_SESSION['bitacle']);
$anuncio= $bitacle->getAnuncios();
//$historial = $bitacle->getHistorial();
$arrayDatos = [];
$resultado="";

$id_com = $_POST["data"];


for ($i = 0; $i < count($bitacle->getAnuncios()); $i++) {
if ($bitacle->getAnuncios()[$i]->getPoi() == $id_com) {
	//$pepe = $bitacle->getAnuncios()[0]->getTitulo();
	//array_push($arrayDatos,$bitacle->getAnuncios()[0]->getTitulo());
	//array_push($arrayDatos,$bitacle->getAnuncios()[0]->getDescripcion());
	//array_push($arrayDatos,$bitacle->getAnuncios()[0]->getImagen());
	$resultado = $resultado.$bitacle->getAnuncios()[$i]->getTitulo();
	$resultado = $resultado.",".$bitacle->getAnuncios()[$i]->getDescripcion();
	$resultado = $resultado.",".$bitacle->getAnuncios()[$i]->getTitulo();

   echo $resultado;
//echo "pepe";
   }else{
   echo null;

   }
}


//echo "papa";
//que devuelva un array para jugar con el en el tornada
?>