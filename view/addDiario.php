<?php
include ("header.php");
?>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h2>Introducir Diario</h2>
            <div>
                <form action="../controller/controllerAddDiario.php" method="post">
                    <p>Nombre del diario: <input type="text" name="nombre" maxlength="25" required /></p>
                    <p>Descripcion: <input type="password" name="descripcion" maxlength="25" required /></p>
                    <p>ID_Usuario: <input type="email" name="id_usuario" maxlength="50" required /></p>
                    <input type="submit" value="enviar" name="submit"/>
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