<?php
include ("header.php");
?>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h1>Introducir POI</h1>
            <div>
                <form action="" name="formPOI">
                    <hr>
                    Nombre:<input type="text" id="nombrePOI"><br/><br/>
                    Descripción:<input type="text" id="descripcionPOI"><br/><br/>
                    URL:<input type="text" id="urlPOI"><br/><br/>
                    Precio:<input type="text" id="precioPOI"><br/><br/>
                    Horario:<input type="text" id="horarioPOI"><br/><br/>
                    Tipo:<select id="tipoPOI">
                        <option>
                            selecciona tipo
                        </option>
                    </select><br/><br/>
                    Transporte:<select id="transportePOI">
                        <option>
                            selecciona transporte
                        </option>
                    </select><br/><br/>
                    Entorno:<select id="entornoPOI">
                        <option>
                            selecciona entorno
                        </option>
                    </select><br/><br/>
                    País:<select id="paisPOI">
                        <option>
                            selecciona país
                        </option>
                    </select><br/><br/>
                    Ciudad:<select id="ciudadPOI">
                        <option>
                            selecciona ciudad
                        </option>
                    </select>
                    <input type="submit" id="submitPOI" value="Crear POI">
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