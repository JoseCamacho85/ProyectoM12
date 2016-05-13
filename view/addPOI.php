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
                <form action="../controller/controllerAddPoi.php" method="post">
                    <hr>
                    <p>Nombre: <input type="text" name="nombrePoi" id="nombrePoi" required></p>
                    <label class="errores" id="nombrePoiE"></label>
                    <p>Foto: <input type="text" name="fotoPoi" id="fotoPoi"></p>
                    <label class="errores" id="fotoPoiE"></label>
                    <p>Descripción: <input type="text" name="descripcionPoi" id="descripcionPoi" required></p>
                    <label class="errores" id="descripcionPoiE"></label>
                    <p>URL: <input type="text" name="urlPoi" id="urlPoi"></p>
                    <label class="errores" id="urlPoiE"></label>
                    <p>Precio: <input type="text" name="precioPoi" id="precioPoi"></p>
                    <label class="errores" id="precioPoiE"></label>
                    <p>Horario: <input type="text" name="horarioPoi" id="horarioPoi"></p>
                    <label class="errores" id="horarioPoiE"></label>
                    <p>
                        Tipo:
                        <select name="tipoPoi" id="tipoPoi">
                            <?php makeDropdownlistTipos(); ?>
                        </select>
                    </p>
                    <label class="errores" id="tipoPoiE"></label>
                    <p>
                        Transporte:
                        <select name="transportePoi" id="transportePoi">
                            <?php makeDropdownlistTransportes(); ?>
                        </select>
                    </p>
                    <label class="errores" id="transportePoiE"></label>
                    <p>
                        Entorno:
                        <select name="entornoPoi" id="entornoPoi">
                            <?php makeDropdownlistEntornos(); ?>
                        </select>
                    </p>
                    <label class="errores" id="entornoPoiE"></label>
                    <p>
                        País:
                        <select name="paisPoi" onchange="cambioPais(this.value)" id="paisPoi">
                            <?php makeDropdownlistPaises(); ?>
                        </select>
                    </p>
                    <label class="errores" id="paisPoiE"></label>
                    <p id="ciudad">
                        Ciudad:
                        <select name="ciudadPoi">
                            <?php makeDropdownlistCiudades(); ?>
                        </select>
                    </p>
                    <input type="submit" name="submit" value="Crear POI">
                </form>
            </div>
            <div id="seleccionados">
                ELEMENTOS SELECCIONADOS APARECERÁN AQUÍ
            </div>
        </div>
    </div>
</div>
<?php
include ("footer.php");
?>