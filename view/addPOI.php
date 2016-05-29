<?php
include ("header.php");
if (checkSession()) {

    include '../model/DAO/dbConnector.php';
    include 'makeDropdownLists.php';
    include '../controller/controllerVerDetalleUsuario.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>

    <!-- Script para generarar dropdown ciudades-->
    <script type="text/javascript"><?php include ("js/cambioPais.js"); ?></script>
    <!--<a href="showPOI.php"><button class="btn btn-info">Volver</button></a>-->
    <div class="container">    
        <h2>introducir punto de interés</h2>
        <div class="row content">
            <div class="col-md-12"> 
                <div class="cuadro">
                    <?php
                    include ("./modules/addFotoPoi.php");
                    ?>

                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
                        <input type="file" name="archivo[]" multiple="multiple">
                        <input type="submit" value="Subir imagen"  class="trig">
                    </form>

                    <p></p>
                    <form method="POST" id="formPOI" action="../controller/controllerAddPoi.php" >
                        <p><span class="titulos">Foto: </span><input type="text" name="fotoPoi" id="fotoPoi" value="<?php echo $fotoSubida; ?>" readonly></p>
                        <p><span class="titulos">*Nombre: </span><input type="text" name="nombrePoi" id="nombrePoi"></p>
                        <p><span class="titulos">*Descripción:</span></p><textarea rows="5" cols="25" name="descripcionPoi" id="descripcionPoi" ></textarea>
                        <p><span class="titulos">URL: </span><input type="text" name="urlPoi" id="urlPoi" value="http://"></p>
                        <p><span class="titulos">Precio: </span><input type="text" name="precioPoi" id="precioPoi"></p>
                        <p><span class="titulos">Horario: </span><input type="text" name="horarioPoi" id="horarioPoi"></p>
                        <p>
                            <span class="titulos">*Tipo: </span>
                            <select name="tipoPoi" id="tipoPoi">
                                <?php makeDropdownlistTipos(); ?>
                            </select><label class="erroresTipo"></label>
                        </p>
                        <p>
                            <span class="titulos">*Transporte: </span>
                            <select name="transportePoi" id="transportePoi">
                                <?php makeDropdownlistTransportes(); ?>
                            </select><label class="erroresTransporte"></label>
                        </p>
                        <p>
                            <span class="titulos">*Entorno: </span>
                            <select name="entornoPoi" id="entornoPoi">
                                <?php makeDropdownlistEntornos(); ?>
                            </select><label class="erroresEntorno"></label>
                        </p>
                        <p>
                            <span class="titulos">*País: </span>
                            <select name="paisPoi" onchange="cambioPais(this.value)" id="paisPoi">
                                <?php makeDropdownlistPaises(); ?>
                            </select><label class="erroresPais"></label>
                        </p>
                        <p id="ciudad">
                            <span class="titulos">*Ciudad: </span>
                            <select name="selectCiudadPOI" id="selectCiudadPOI">

                            </select><label class="erroresCiudad"></label>
                        </p>
                        <div class="camposOb">*Campos obligatorios</div>
                        <div class="centrar"><input type="submit" name="submitPoi" id="validate" value="Crear POI" class="btn btn-info"></div>
                    </form>
                </div>
                <div id="seleccionados">
                </div>
            </div>
        </div><br>


    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>