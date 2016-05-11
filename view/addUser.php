<?php
include ("header.php");
?>
<?php
$fotoSubida = "";
# definimos la carpeta destino
$carpetaDestino = "fotoUsuario/";

# si hay algun archivo que subir
if (@$_FILES["archivo"]["name"][0]) {

    # recorremos todos los arhivos que se han subido
    for ($i = 0; $i < count($_FILES["archivo"]["name"]); $i++) {

        # si es un formato de imagen
        if ($_FILES["archivo"]["type"][$i] == "image/jpeg" || $_FILES["archivo"]["type"][$i] == "image/pjpeg" || $_FILES["archivo"]["type"][$i] == "image/gif" || $_FILES["archivo"]["type"][$i] == "image/png") {

            # si exsite la carpeta o se ha creado
            if (file_exists($carpetaDestino) || @mkdir($carpetaDestino)) {
                $origen = $_FILES["archivo"]["tmp_name"][$i];
                $destino = $carpetaDestino . $_FILES["archivo"]["name"][$i];

                # movemos el archivo
                if (@move_uploaded_file($origen, $destino)) {
                    $fotoSubida = $_FILES["archivo"]["name"][$i];
                     echo "<br>Imagen subida correctamente";
                } else {
                    echo "<br>No se ha podido mover el archivo: " . $_FILES["archivo"]["name"][$i];
                }
            } else {
                echo "<br>No se ha podido crear la carpeta: up/" . $user;
            }
        } else {
            echo "<br>" . $_FILES["archivo"]["name"][$i] . " - NO es imagen jpg";
        }
    }
} else {
    echo "<br>No se ha subido ninguna imagen";
}
?>
<p>Foto: <input type="text" id="foto" value="<?php echo $fotoSubida; ?>"/></p>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
    <input type="file" name="archivo[]" multiple="multiple">
    <input type="submit" value="Subir imagen"  class="trig">
</form>
<form action="../controller/controllerAddUser.php" method="post" enctype="multipart/form-data" name="inscripcion">
    <p>Nombre de usuario: <input type="text" name="username" maxlength="25" /></p>
    <p>Contraseña: <input type="password" name="password" maxlength="25" /></p>
    <p>E-mail: <input type="email" name="email" maxlength="50" /></p>
    <p>Población: <input type="text" name="poblacion" maxlength="50" /></p>
    <p>Idioma: <input type="text" name="idioma" maxlength="25" /></p>
    <p>Teléfono: <input type="text" name="telefono" maxlength="11" /></p>
    <p>URL: <input type="text" name="url" maxlength="50" /></p>

    <p>Texto de presentación:</p>
    <textarea name="textoPresentacion" rows="4" cols="30"></textarea><br/>
    <input type="submit" value="Registrarse" name="submit"/>
</form>

<?php
include ("footer.php");
?>