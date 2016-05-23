<?php
include ("header.php");
include ("makeDropdownLists.php");
include("../controller/controllerIdDropdowns.php");


?>
<script type="text/javascript"><?php include ("js/mostrarUsuarios.js");?></script>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h2>Administración</h2>
            <div>
                <form action="../controller/controllerAdministracion.php" name="formUser">
                    <hr>
                    <p>User: <select name="selectedUser" onchange="mostrarUsuarios(this.value)">
                            <!--<option>
                                selecciona POI
                            </option>-->
                            <?php     
                            
                            makeDropdownlistUsers();     ?>
                        </select></p>
                    <p>Username:<input type="text" id="usernameUser" name="usernameUser"/></p>
                   <p>Password:<input type="text" id="passwordUser" name="passwordUser"/></p>
                    <p>E-mail:<input type="text" id="emailUser" name="emailUser" /></p>
                    <p>Población:<input type="text" id="poblacionUser" name="poblacionUser"></p>
                    <p>Idioma:<input type="text" id="idiomaUser" name="idiomaUser"/></p>
                    <p>Teléfono:<input type="text" id="telefonoUser" name="telefonoUser"/></p>
                    <p>URL:<input type="text" id="urlUser" name="urlUser"/></p>
                    <p>Foto:<input type="text" id="fotoUser" name="fotoUser"/></p>
                    <p>Texto Presentación:<input type="text" id="textoPresentacionUser" name="textoPresentacionUser"/></p>

                    <input type="submit" id="modificarUser" name= "modificarUser" value="Modificar Usuario">
                    <div id="botones">
                    <input type="submit" id="eliminarUser" name="eliminarUser" value="Eliminar Usuario">
                </div>
                </form>
                

            </div>
            <div id="seleccionados">
                ELEMENTOS SELECCIONADOS APARECERÁN AQUÍ
            </div>
            <div id="prueba1">
                </div>
        </div>
    </div>
</div>

<?php
include ("footer.php");
?>