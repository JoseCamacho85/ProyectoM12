<?php
//include("conexionBD.php");
session_start();
include("controllerIdDropdowns.php");
include("../model/functionAutoLoad.php");
$bd = "bitaclebd";
$server = "localhost";
$userbd = "root";
$password = "";


$bitacle = unserialize($_SESSION['bitacle']);

$user = unserialize($_SESSION['user']);

$titulo = $_POST["title"];
$usuarioReceptor = $_POST["user"];
$message = $_POST["message"];



$usuario = $bitacle->getUsers();
$id_usuario = cogerIdUsuario($usuario, $user);



try{
    $MP = new MensajePrivado($titulo,$message,$usuarioReceptor,$id_usuario);
} catch (Exception $ex) {
    
}



$con = @mysqli_connect($server, $userbd, $password, $bd);
if(!$con)die("error de conexion".mysqli_connect_error());

$sql = "INSERT INTO mensajeprivado (titulo,texto,destinatario,id_usuario) VALUES("
        ."'$titulo','$message','$usuarioReceptor','$id_usuario')"; 
$result = mysqli_query($con, $sql);

if($result){
    echo "Mensaje registrado.";
}
    



?>