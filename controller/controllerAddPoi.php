<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include ('validateNullFields.php');
$bitacle = unserialize($_SESSION['bitacle']);

if (isset($_REQUEST['submit'])) {
    $nombre = $_REQUEST['nombrePoi'];
    $foto = $_REQUEST['fotoPoi'];
    $descripcion = $_REQUEST['descripcionPoi'];
    $url = $_REQUEST['urlPoi'];
    $precio = $_REQUEST['precioPoi'];
    $horario = $_REQUEST['horarioPoi'];
    $id_tipo = $_REQUEST['tipoPoi'];
    $id_transporte = $_REQUEST['transportePoi'];
    $id_entorno = $_REQUEST['entornoPoi'];
    $id_ciudad = $_REQUEST['ciudadPoi'];
    $id_pais = $_REQUEST['paisPoi'];
    $id_usuario = 1 /* $_REQUEST['usuarioPoi'] */;
    
    $requiredFields[] = $nombre;
    
    
    
        if(validateNullfields($requiredFields)){
            $tipo = $bitacle->getTipos();
            $transporte = $bitacle->getTransportes();
            $entorno = $bitacle->getEntornos();
            $ciudad = $bitacle->getCiudades();
            $pais = $bitacle->getPaises();
            //    $usuario = $bitacle->getUsers();

            $id_tipo1 = cogerId($tipo, $id_tipo);
            $id_transporte1 = cogerId($transporte, $id_transporte);
            $id_entorno1 = cogerId($entorno, $id_entorno);
            $id_ciudad1 = cogerId($ciudad, $id_ciudad);
            $id_pais1 = cogerId($pais, $id_pais);
            //    $id_usuario1 = cogerId($usuario, $id_usuario);

            try {
                $bitacle->insertPoi(null, $nombre, $foto, 
                        $descripcion, $url, $precio, $horario, 
                        $id_tipo1, $id_transporte1, $id_entorno1, 
                        $id_ciudad1, $id_pais1, $id_usuario);
                echo $nombre . "perfecto";
            } catch (Exception $e) {
                showMessage($e->getMessage());
        }
    }else{
        echo "Requiere que al menos introducir el nombre";
    }
}else{
    header("location:../view/addPOI.php");
}
?>