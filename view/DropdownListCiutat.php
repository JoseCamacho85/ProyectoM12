<?php
session_start();
include("../model/functionAutoLoad.php");
include("../controller/controllerIdDropdowns.php");
$bitacle = unserialize($_SESSION['bitacle']);
$ciudad = $bitacle->getCiudades();
$pais = $bitacle->getPaises();
	
$id_com = $_POST["data"];

$aux = cogerId($pais, $id_com);

//echo "Ciudad: <br>";
//echo "<select name=\"ciudadPoi\">";
for ($i = 0; $i < count($bitacle->getCiudades()); $i++) {

if ($bitacle->getCiudades()[$i]->getId_pais() == $aux) {
        $nombre = $bitacle->getCiudades()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }

 }
//echo "</select>";

//echo "hola";
//echo "hola" + $id_com;

//$sql = "SELECT * FROM employees where officeCode = $id_com";
/*$sql = "SELECT * FROM `ciudad` WHERE id_pais = $aux";
$result = mysql_query($sql);

if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    die($message);
}
	
echo "<select name=\"ciudadPoi\">";
while ($row = mysql_fetch_assoc($result)) {
	echo "<option>".$row['nombre']."</option>";
}
echo "</select>";*/
?>