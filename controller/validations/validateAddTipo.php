<?php

if (emptyField($tipo) == false) {
    header("Location: ../view/errors/errorCamposVaciosTipo.html");
    break;
} else if (controlFindTipo($tipo) == false) {
    header("Location: ../view/errors/errorCampoNombreExisteTipo.html");
    break;
}
?>