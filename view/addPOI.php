<?php
include ("header.php");
if (checkSession()) {

    include '../model/DAO/dbConnector.php';
    include 'makeDropdownLists.php';
    
    ?>


    <!-- Script para generarar dropdown ciudades-->
    <script type="text/javascript"><?php include ("js/cambioPais.js"); ?></script>

    <div class="container-fluid">    
        <h2>Introducir Puntos De Interes</h2>
        <div class="row content">
            <div class="col-sm-12"> 
                <div>
                    <?php
                    include ("./modules/addFotoPoi.php");
                    ?>
                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
                        <input class="center-block" type="file" name="archivo[]" multiple="multiple">
                        <input type="submit" value="Subir imagen"  class="trig">
                    </form>
                    <form method="POST" id="formPOI" action="../controller/controllerAddPoi.php" >
                        <hr>
                        <p><span>Foto: </span><input type="text" name="fotoPoi" id="fotoPoi" value="<?php echo $fotoSubida; ?>"></p>
                        <p><span>Nombre: </span><input type="text" name="nombrePoi" id="nombrePoi"></p>
                        <p><span>Descripción: </span><input type="text" name="descripcionPoi" id="descripcionPoi" ></p>
                        <p><span>URL: </span><input type="text" name="urlPoi" id="urlPoi" value="http://"></p>
                        <p><span>Precio: </span><input type="text" name="precioPoi" id="precioPoi"></p>
                        <p><span>Horario: </span><input type="text" name="horarioPoi" id="horarioPoi"></p>
                        <p>
                            <span>Tipo: </span>
                            <select name="tipoPoi" id="tipoPoi">
                                <?php makeDropdownlistTipos(); ?>
                            </select><span class="erroresTipo"></span>
                        </p>
                        <p>
                            <span>Transporte: </span>
                            <select name="transportePoi" id="transportePoi">
                                <?php makeDropdownlistTransportes(); ?>
                            </select><span class="erroresTransporte"></span>
                        </p>
                        <p>
                            <span>Entorno: </span>
                            <select name="entornoPoi" id="entornoPoi">
                                <?php makeDropdownlistEntornos(); ?>
                            </select><span class="erroresEntorno"></span>
                        </p>
                        <p>
                            <span>País: </span>
                            <select name="paisPoi" onchange="cambioPais(this.value)" id="paisPoi">
                                <?php makeDropdownlistPaises(); ?>
                            </select><span class="erroresPais"></span>
                        </p>
                        <p id="ciudad">
                            <span>Ciudad: </span>
                            <select name="selectCiudadPOI" id="selectCiudadPOI">

                            </select><span class="erroresCiudad"></span>
                        </p>
                        <input type="submit" name="submitPoi" id="validate" value="Crear POI">
                    </form>
                </div>
                <div id="seleccionados">
                    <div id="ok">ssss</div>
                </div>
            </div>
        </div><br>
        <a href="showPOI.php"><button class="btn btn-info">VOLVER</button></a>

    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>