<?php
include ("header.php");
include '../model/DAO/dbConnector.php';
include 'makeDropdownLists.php';
?>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h1>Introducir POI</h1>
            <div>
                 
                <form method="post" id="formPOI">
                    <hr>
                    <p><span>Nombre: </span><input type="text" name="nombrePoi" id="nombrePoi"></p>
                    <p><span>Foto: </span><input type="text" name="fotoPoi" id="fotoPoi"></p>
                    <p><span>Descripción: </span><input type="text" name="descripcionPoi" id="descripcionPoi" ></p>
                    <p><span>URL: </span><input type="text" name="urlPoi" id="urlPoi" value="http://"></p>
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
                        Ciudad:
                        <select name="ciudadPoi" id="ciudadPoi">
                            <?php makeDropdownlistCiudades(); ?>
                        </select>
                    </p>
                    <input type="submit" name="submit" value="Crear POI">
                </form>
            </div>
            <div id="seleccionados">
                <div id="ok"></div>
            </div>
        </div>
    </div>
</div>
<?php
include ("footer.php");
?>