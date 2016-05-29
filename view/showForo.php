<?php
include ("header.php");
if (checkSession()) {
    include '../controller/controllerVerDetalleUsuario.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
}
?>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-md-10 text-center col-md-offset-1"> 
            <br>
            <table class="table table-hover">
                <tr class="info">
                    <td width="20px"></td>
                    <td width="180px">TÍTULO</td>
                    <td width="180px">AUTOR</td>
                    <td width="180px">FECHA</td>
                    <td width="180px">RESPUESTAS</td>
                </tr>
                <?php
                include("../controller/conexionBD.php");
                $query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
                $result = $mysqli->query($query);
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $id = $row['ID'];
                    $autor = $row['autor'];
                    $titulo = $row['titulo'];
                    $fecha = $row['fecha'];
                    $respuestas = $row['respuestas'];
                    echo "<tr>";
                    echo "<td><a class='btn btn-info' href='foro.php?id=$id'  role='button'>"
                    . "ver</a>"
                    . "</td>";
                    echo "<td>$titulo</td>";
                    echo "<td>$autor</td>";
                    echo "<td>" . substr($fecha, 2) . "</td>";
                    echo "<td>$respuestas</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <?php
            if (isset($_SESSION['user'])) {
                $user = "";
                include("modules/addTemaForoBoton.php");
            }
            ?>
        </div>
    </div>
</div>
<?php
include ("footer.php");
?>