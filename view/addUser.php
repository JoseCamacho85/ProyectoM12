<?php
include ("header.php");
?>
<div class="container-fluid text-center">    
    <h2>Introducir POI</h2>
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <div>
                <?php
                include ("./modules/addFotoUser.php");
                ?>
                <p><span>Foto: </span><input type="text" name="fotoUser" id="fotoUser" value="<?php echo $fotoSubida; ?>"></p>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
                    <input class="center-block" type="file" name="archivo[]" multiple="multiple">
                    <input type="submit" value="Subir imagen"  class="trig">
                </form>
                <form method="post" enctype="multipart/form-data" name="inscripcion" id="formUser">

                    <p>Nombre de usuario: <input id="nombreUser" type="text" name="username"  /></p>
                    <p>Contraseña: <input id="passUser" type="password" name="password"  /></p>
                    <p>E-mail: <input id="emailUser" type="email" name="email"/></p>
                    <p>Población: <input id="poblacionUser" type="text" name="poblacion" /></p>
                    <p>Idioma: <input id="idiomaUser" type="text" name="idioma" /></p>
                    <p>Teléfono: <input id="telefonoUser" type="text" name="telefono"/></p>
                    <p>URL: <input id="urlUser" type="text" name="url" /></p>
                    <p>Foto: <input id="fotoUser" type="text" id="fotoUser" name = "fotoUser" value="<?php echo $fotoSubida; ?>"/></p>

                    <p>Texto de presentación:</p>
                    <textarea id="presentacionUser" name="textoPresentacion" rows="4" cols="30"></textarea><br/>


                    <p>¿Eres usuario profesional?: <input id="profesionalUser" type="checkbox" name="profesional" value="prof" /></p>


                    <input type="submit" value="Registrarse" name="submit"/>
                </form>
                <div id="seleccionados">
                    <div id="ok">ssss</div>
                </div>
            </div>
        </div>
    </div><br>

    <?php
    include ("footer.php");
    ?>