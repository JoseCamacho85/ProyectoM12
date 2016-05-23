<?php
//include("conexionBD.php");
include("controllerIdDropdowns.php");
session_start();

$bd = "bitaclebd";
$server = "localhost";
$userbd = "root";
$password = "";


//$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

$titulo = $_POST["title"];
$usuarioReceptor = $_POST["user"];
$message = $_POST["message"];

$con = @mysqli_connect($server, $userbd, $password, $bd);
if(!$con)die("error de conexion".mysqli_connect_error());

$sql = "SELECT titulo, texto FROM mensajeprivado where destinatario='$user';"; 
$result = mysqli_query($con, $sql);

if($result){
    
    //echo "Mensaje registrado.";
    foreach ($result as $value) {
        //print_r($value);
        echo "<b>Titulo: ".$value["titulo"]." | ".$user."</b><br>";
        echo " ".$value["texto"];
        echo "<br>";
    }
    
}
    



?>