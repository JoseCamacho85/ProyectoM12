<?php
include ("header.php");
include '../model/DAO/dbConnector.php';
include 'makeDropdownLists.php';
?>

<div class="container-fluid text-center">    
    <h2>Introducir POI</h2>
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <div>
                  <?php
                include ("./modules/addFotoPoi.php");
                ?>
                <p><span>Foto: </span><input type="text" name="fotoPoi" id="fotoPoi" value="<?php echo $fotoSubida; ?>"></p>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
                    <input class="center-block" type="file" name="archivo[]" multiple="multiple">
                    <input type="submit" value="Subir imagen"  class="trig">
                </form>
                <form method="POST" id="formPOI">
                    <hr>
                    <p><span>Nombre: </span><input type="text" name="nombrePoi" id="nombrePoi"></p>
                    <p><span>Descripción: </span><input type="text" name="descripcionPoi" id="descripcionPoi" ></p>
                    <p><span>URL: </span><input type="text" name="urlPoi" id="urlPoi" value=""></p>
                    <p><span>Precio: </span><input type="text" name="precioPoi" id="precioPoi"></p>
                    <p><span>Horario: </span><input type="text" name="horarioPoi" id="horarioPoi"></p>
                    <p>
                        <span>Tipo: </span>
                        <select name="tipoPoi" id="tipoPoi">
                            <?php makeDropdownlistTipos(); ?>
                        </select>
                    </p>
                    <p>
                        <span>Transporte: </span>
                        <select name="transportePoi" id="transportePoi">
                            <?php makeDropdownlistTransportes(); ?>
                        </select>
                    </p>
                    <p>
                        <span>Entorno: </span>
                        <select name="entornoPoi" id="entornoPoi">
                            <?php makeDropdownlistEntornos(); ?>
                        </select>
                    </p>
                    <p>
                        <span>País: </span>
                        <select name="paisPoi" onchange="cambioPais(this.value)" id="paisPoi">
                            <?php makeDropdownlistPaises(); ?>
                        </select>
                    </p>
                    <p id="ciudad">
                        <span>Ciudad: </span>
                        <select name="selectCiudadPOI" id="selectCiudadPOI">

                        </select>
                    </p>
                    <input type="submit" name="submit" value="Crear POI">
                </form>
            </div>
            <div id="seleccionados">
                <div id="ok"></div>
            </div>
        </div>
    </div><br>
    <a href="showPOI.php"><button class="btn btn-info">VOLVER</button></a>

</div>
<?php
include ("footer.php");
?>