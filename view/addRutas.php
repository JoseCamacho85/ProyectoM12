<?php
include ("header.php");


if (checkSession()) {
    ?>

    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-12 text-center"> 
                <h2>Introducir Ruta</h2>
                <div>
                    <form action="../controller/controllerAddRuta.php" method="post" id="formRuta">
                        <p>Nombre de la ruta: <input type="text" name="nameRuta"/></p>
                        <p>Descripcion de la ruta: <textarea name="nameDescripcion" rows="4" cols="30"></textarea><br/></p>
                        <input type="submit" value="Añadir Ruta" name="submit" class="btn btn-info"/>
                    </form>
                    <br>
                    <a href="showRutas.php"><button class="btn btn-info">volver a rutas</button></a>
                </div>
                <div id="ok">ssss</div>
            </div>
        </div>
    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>