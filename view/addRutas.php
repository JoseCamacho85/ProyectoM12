<?php
include ("header.php");


if (checkSession()) {
    ?>
    <a href="showRutas.php"><button class="btn btn-info">Volver</button></a>
    <div class="container">    
        <div class="row content">
            <div class="col-md-12"> 
                <h2>Introducir Ruta</h2>
                <div class="cuadro">
                    <form action="../controller/controllerAddRuta.php" method="post" id="formRuta">
                        <p><span class="titulos">Nombre: </span><input type="text" name="nameRuta"/></p>
                        <p><span class="titulos">Descripción: </span><textarea name="nameDescripcion" rows="4" cols="30"></textarea></p>
                        <div class="centrar"><input type="submit" value="Añadir Ruta" name="submit" class="btn btn-info"/></div>
                    </form>
                </div>
                <div id="ok"></div>
            </div>
        </div>
    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>