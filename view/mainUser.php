<?php
include ("header.php");
if (checkSession()) {
    include '../controller/controllerVerDetalleUsuario.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>

    <div class="container">
        <h2>datos personales</h2>
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
                    <form method="post" action="../controller/controllerModificarDatosUsuario.php">
                        <img class="fotoMostrar" src="fotoUsuario/<?php echo $foto ?>"/>
                        <p><span class="titulos">Foto: </span><input id="fotoUser" type="text" id="fotoUser" name = "fotoUser" value="<?php echo $fotoSubida; ?>"readonly/></p>
                        <p><span class="titulos">Username: </span><input type="text" name="username" value="<?php echo $username ?>" /></p>
                        <p><span class="titulos">E-mail: </span><input type="text" name="email" value="<?php echo $email ?>" </p>
                        <p><span class="titulos">Población: </span><input type="text" name="poblacion" value="<?php echo $poblacion ?>" </p>
                        <p><span class="titulos">Idioma: </span><input type="text" name="idioma" value="<?php echo $idioma ?>" </p>
                        <p><span class="titulos">Teléfono: </span><input type="text" name="telefono" value="<?php echo $telefono ?>" </p>
                        <p><span class="titulos">URL: </span><input type="text" name="url" value="<?php echo $url ?>" </p>
                        <p><span class="titulos">Presentación: </span></p><textarea rows="4" cols="25" name="textoPresentacion" ><?php echo $texto ?></textarea>
                        <div class="centrar">
                            <div id="botones">
                                <input type="submit" name= "modificarDatos" value="Modificar datos" class="btn btn-info"/>
                                <input type="submit" name= "eliminarUser" value="Darse de baja" class="btn btn-info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>
