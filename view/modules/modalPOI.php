<?php
error_reporting(0);

function showTablePOI($id, $foto, $nombre, $url, $precio, $horario) {
    ?>
    <div class="col-md-offset-1 col-md-10">
        <table class="table table-hover">
            <tr class="info"><td>foto</td><td>Nombre</td><td>Url</td><td>Horario</td></tr>
            <tr>
                <td style="width: 10%;">
                    <a href="showDetallePoi.php?id=<?php echo $id; ?>">
                        <img style="width: 70%;" src="fotoPoi/<?php echo $foto; ?>">
                    </a>
                </td>
                <td>
                    <a href="showDetallePoi.php?id=<?php echo $id; ?>"><p><?php echo $nombre; ?></p></a>
                </td>
                <td>
                    <?php echo $url; ?>
                </td>             
                <td>
                    <?php echo $horario; ?>
                </td>
            </tr>
        </table>
    </div>
    <?php
}

?>
