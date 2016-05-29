<?php
include ("header.php");
if (checkSession()) {
    include '../controller/controllerVerDetalleUsuario.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>
    <!--<a href="showDiaryUser.php" id="volver"><button class="btn btn-info">VOLVER</button></a>-->
    <div class="container">    
        <div class="row content">
            <div class="col-md-12"> 
                <h2>introducir diario</h2>
                <div class="cuadro">
                    <form action="../controller/controllerAddDiario.php" method="POST" id="formDiario">
                        <p><span class="titulos">Nombre: </span><input id="nombreDiario" type="text" name="nombre" /></p>
                        <p><span class="titulos">Descripción: </span><input id ="descripcionDiario" type="text" name="descripcion"/></p>

                        <div class="centrar"><input type="submit" value="Crear Diario" name="submit" class="btn btn-info"></div>
                    </form>
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