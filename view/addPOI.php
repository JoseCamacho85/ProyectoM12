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
                    <p>Nombre: <input type="text" name="nombrePoi"></p>
                    <p>Foto: <input type="text" name="fotoPoi"></p>
                    <p>Descripción: <input type="text" name="descripcionPoi"></p>
                    <p>URL: <input type="text" name="urlPoi"></p>
                    <p>Precio: <input type="text" name="precioPoi"></p>
                    <p>Horario: <input type="text" name="horarioPoi"></p>
                    <p>
                        Tipo:
                        <select name="tipoPoi">
                            <option>
                                selecciona tipo
                            </option>
                        </select>
                    </p>
                    <p>
                        Transporte:
                        <select name="transportePoi">
                            <option>
                                selecciona transporte
                            </option>
                        </select>
                    </p>
                    <p>
                        Entorno:
                        <select name="entornoPoi">
                            <option>
                                selecciona entorno
                            </option>
                        </select>
                    </p>
                    <p>
                        Ciudad:
                        <select name="ciudadPoi">
                            <?php makeDropdownlistCiudades(); ?>
                        </select>
                    </p>
                    <p>
                        País:
                        <select name="paisPoi">
                            <option>
                                selecciona país
                            </option>
                        </select>
                    </p>
                    <p>Usuario: <input type="text" name="usuarioPoi"></p>
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