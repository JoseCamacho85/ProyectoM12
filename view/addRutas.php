<?php
include ("header.php");
?>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h2>Introducir Ruta</h2>
            <div>
                <form action="../controller/controllerAddRuta.php" method="post">
                    <p>Nombre de la ruta: <input type="text" name="nameRuta" maxlength="25" required /></p>
                    <p>descripcion de la ruta: <textarea name="nameDescripcion" rows="4" cols="30"></textarea><br/></p>
                    <p>id del usuari: <input type="text" name="idUsuari" maxlength="25" required /></p>
                    <input type="submit" value="Registrarse" name="submit" class="btn btn-info"/>
                </form>
                <br>
                <a href="showRutas.php"><button class="btn btn-info">volver a rutas</button></a>
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