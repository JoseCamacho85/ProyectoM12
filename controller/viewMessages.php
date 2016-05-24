<?php
//include("conexionBD.php");
include("controllerIdDropdowns.php");
include("controllerNombreDropdowns.php");
include("../model/functionAutoLoad.php");
session_start();

//$bd = "bitaclebd";
//$server = "localhost";
//$userbd = "root";
//$password = "";


$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

$titulo = $_POST["title"];
$usuarioReceptor = $_POST["user"];
$message = $_POST["message"];

//$con = @mysqli_connect($server, $userbd, $password, $bd);
//if(!$con)die("error de conexion".mysqli_connect_error());

//$sql = "SELECT titulo, texto FROM mensajeprivado where destinatario='$user';"; 

$MPs = $bitacle->VerMensajesPrivados($user);
//$result = mysqli_query($con, $sql);

//print_r($MPs);

if($MPs){
    
    foreach ($MPs as $value) {
        //print_r($value);
        $emisor = cogerUsername($bitacle->getUsers(), $value->getId_emisor());
        echo "<table class='table table-bordered'><tr class='info'>";
        echo "<td><h5>Titulo: ".$value->getTitulo()."</h5></td>"
                . "<td style='width:20%;'><h5>".$emisor."</h5></td></tr>";
        echo "<tr><td colspan='2'>".$value->getTexto()."</td></tr>";
    }
    
}
    



?>