<?php
include ("header.php");

if (checkSession()) {
    include_once("../model/DAO/classDB.php");
    require_once('Structures/DataGrid.php');
    include("../controller/controllerIdDropdowns.php");
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>
    <!--<a href="mainUser.php" id="volver"><button class="btn btn-info">Volver</button></a>-->
    <div class="container">   
        <div class="row content">
            <div class="col-md-12 text-center"> 
                <h2>lugares visitados</h2>
                <div class="cuadro">
                    <p id="ciudadesVis">  
                        <?php include ("mostrarCiudadesVisitadas.php"); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>