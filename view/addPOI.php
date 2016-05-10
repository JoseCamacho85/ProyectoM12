<?php
include ("header.php");
?>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h1>Introducir POI</h1>
            <div>
                <form action="../controller/controllerAddPoi.php" name="formPoi" method="POST">
                    <hr>
                    <p>Nombre: <input type="text" id="nombrePoi"></p>
                    <p>Foto: <input type="text" id="fotoPoi"></p>
                    <p>Descripción: <input type="text" id="descripcionPoi"></p>
                    <p>URL: <input type="text" id="urlPoi"></p>
                    <p>Precio: <input type="text" id="precioPoi"></p>
                    <p>Horario: <input type="text" id="horarioPoi"></p>
                    <p>
                        Tipo:
                        <select id="tipoPoi">
                            <option>
                                selecciona tipo
                            </option>
                        </select>
                    </p>
                    <p>
                        Transporte:
                        <select id="transportePoi">
                            <option>
                                selecciona transporte
                            </option>
                        </select>
                    </p>
                    <p>
                        Entorno:
                        <select id="entornoPoi">
                            <option>
                                selecciona entorno
                            </option>
                        </select>
                    </p>
                    <p>
                        Ciudad:
                        <select id="ciudadPoi">
                            <option>
                                selecciona ciudad
                            </option>
                        </select>
                    </p>
                    <p>
                        País:
                        <select id="paisPoi">
                            <option>
                                selecciona país
                            </option>
                        </select>
                    </p>
                    <p>Usuario: <input type="text" id="usuarioPoi"></p>
                    <input type="submit" id="submitPoi" value="Crear POI">
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