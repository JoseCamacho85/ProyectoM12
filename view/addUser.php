<?php
include ("header.php");
?>
<a href="main.php"><button class="btn btn-info">Volver</button></a>
    <div class="container">     
        <h2>registrar Usuario</h2>
        <hr>
        <div class="row content">
            <div class="col-md-12"> 
                <div class="cuadro">
                    <?php
                    include ("./modules/addFotoUser.php");
                    ?>

                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
                        <input type="file" name="archivo[]" multiple="multiple">
                        <input type="submit" value="Subir imagen"  class="trig">
                    </form>

                    <p></p>

                    <form action="../controller/controllerAddUser.php" method="post" enctype="multipart/form-data" name="inscripcion" id="formUser">
                        <p><span class="titulos">Foto: </span><input id="fotoUser" type="text" id="fotoUser" name = "fotoUser" value="<?php echo $fotoSubida; ?>" readonly/></p>
                        <p><span class="titulos">*Username: </span><input id="nombreUser" type="text" name="username"  /></p>
                        <p><span class="titulos">*Contraseña: </span><input id="passUser" type="password" name="password"  /></p>
                        <p><span class="titulos">*E-mail: </span><input id="emailUser" type="email" name="email"/></p>
                        <p><span class="titulos">Población: </span><input id="poblacionUser" type="text" name="poblacion" /></p>
                        <p><span class="titulos">Idioma: </span><input id="idiomaUser" type="text" name="idioma" /></p>
                        <p><span class="titulos">Teléfono: </span><input id="telefonoUser" type="text" name="telefono"/></p>
                        <p><span class="titulos">URL: </span><input id="urlUser" type="text" name="url" value="http://" /></p>
                        <p><span class="titulos">Presentación: </span></p>
                        <textarea id="presentacionUser" name="textoPresentacion" rows="4" cols="30"></textarea><br/>


                        <p class="titulos">¿Eres usuario profesional?: <input id="profesionalUser" type="checkbox" name="profesional" value="prof" /></p>

                        <div class="camposOb">*Campos obligatorios</div>

                        <div class="centrar"><input type="submit" value="Registrarse" name="submit" class="btn btn-info"/></div>
                </form>
                <div id="seleccionados">
                    <div id="ok"></div>
                </div>
            </div>
        </div>
    </div><br>
    </div>
    <?php
    include ("footer.php");
    ?>