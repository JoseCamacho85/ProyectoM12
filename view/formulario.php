<?php
include("header.php");
if (isset($_GET["respuestas"]))
    $respuestas = $_GET['respuestas'];
else
    $respuestas = 0;
if (isset($_GET["identificador"]))
    $identificador = $_GET['identificador'];
else
    $identificador = 0;
?>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <br>
            <form name="form" action="../controller/agregar.php" method="post">
                <input type="hidden" name="identificador" value="<?php echo $identificador; ?>">
                <input type="hidden" name="respuestas" value="<?php echo $respuestas; ?>">
                <table  class='table table-bordered'>
                    <?php
                    if (isset($_POST["newTheme"])) {
                        ?>
                        <tr>
                            <td>Titulo</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="titulo"></td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td>Mensaje</td>
                    </tr>
                    <tr>
                        <td><textarea name="mensaje" cols="50" rows="5" required="required"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" id="submit" name="submit" value="Enviar Mensaje"></td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</div>
<?php
include("footer.php");
?>