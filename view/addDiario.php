<?php
include ("header.php");
?>
<div class="container-fluid text-center">    
    <h2>Introducir Diario</h2>
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <form method="POST" id="formDiario">
                <p>Nombre del diario: <input id="nombreDiario" type="text" name="nombre" /></p>
                <p>Descripcion: <input id ="descripcionDiario" type="text" name="descripcion"/></p>
               
                <input type="submit" value="Crear Diario" name="submit">
            </form>
        </div>
        <div id="seleccionados">
            <div id="ok">ssss</div>
        </div>
        <a href="showDiaryUser.php" id="volver"><button class="btn btn-info">VOLVER</button></a>    
    </div> 
</div>
<?php
include ("footer.php");
?>