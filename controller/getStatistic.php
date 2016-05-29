<?php
include("../model/functionAutoLoad.php");
	$stat = array();
	$con = new DB();

        $sql = $con->prepare("SELECT pais.nombre, count(poi.nombre) FROM poi INNER JOIN pais ON pais.id = poi.id_pais GROUP BY pais.nombre"); 
        $result=$con->executeQuery($sql);
        $i=0;
        foreach ($result as $row) {        
        $username = $row["nombre"];       
        $count = $row["count(poi.nombre)"]; 
        $stat[$i]=$username;
        $stat[$i+1]=$count;
        $i=$i+2;
        }

        echo json_encode($stat);

?>