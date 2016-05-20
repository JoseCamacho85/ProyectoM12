<?php
include ("header.php");
?>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
        </div>
        <table width="620px">
            <tr>
                <td width="20px"></td>
                <td width="200px">Titulo</td>
                <td width="200px">Fecha</td>
                <td width="200px">Respuesta</td>
            </tr>
            <?php
            include("../controller/conexionBD.php");
            $query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
            $result = $mysqli->query($query);
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $id = $row['ID'];
                $titulo = $row['titulo'];
                $fecha = $row['fecha'];
                $respuestas = $row['respuestas'];
                echo "<tr>";
                echo "<td><a href='foro.php?id=$id'>ver</a></td>";
                echo "<td>$titulo</td>";
                echo "<td>" . date("d-m-y,$fecha") . "</td>";
                echo "<td>$respuestas</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <a href="formulario.php"> nuevo tema </a>
    </div>
</div>

<?php
include ("footer.php");
?>