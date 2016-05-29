<?php
include("header.php");
if (checkSession()) {
    include '../controller/controllerVerDetalleUsuario.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
}
?>
<div class="container-fluid">    
    <div class="row content">
        <div class="col-md-10 col-md-offset-1"> 
            <br>
            <?php
            include("../controller/conexionBD.php");
            if (isset($_GET["id"]))
                $id = $_GET['id'];
            $query = "SELECT * FROM  foro WHERE ID = '$id' ORDER BY fecha DESC";
            $result = $mysqli->query($query);
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $id = $row['ID'];
                $titulo = $row['titulo'];
                $autor = $row['autor'];
                $mensaje = $row['mensaje'];
                $fecha = $row['fecha'];
                $respuestas = $row['respuestas'];


                echo "<table class='table table-bordered'>";
                echo "<tr class='info'><td><h5>$titulo</h5></td></tr>";
                echo "<tr><td><h6>$autor</h6></td></tr>";
                echo "<tr><td>$mensaje</td></tr>";

                if (isset($_SESSION['user'])) {
                    $user = "";
                    echo "<tr><td class='col-md-12'>"
                    . "<a href='formulario.php?id&respuestas=$respuestas&identificador=$id' class='btn btn-info'>Responder</a>"
                    . "</td></tr>";
                    echo "</table>";
                }
            }

            $query2 = "SELECT * FROM  foro WHERE identificador = '$id' ORDER BY fecha DESC";
            $result2 = $mysqli->query($query2);
            echo "<h5>respuestas:</h5><hr>";
            while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
                $id = $row['ID'];
                $titulo = $row['titulo'];
                $autor = $row['autor'];
                $mensaje = $row['mensaje'];
                $fecha = $row['fecha'];
                $respuestas = $row['respuestas'];


                echo "<table class='table table-bordered'>";
                echo "<tr><td  class='info'><h6>$autor</h6></td></tr>";
                echo "<tr><td>$mensaje</td></tr>";
                echo "</table>";
            }
            ?>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>