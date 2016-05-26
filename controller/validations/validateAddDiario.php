<?php

if (emptyField($nombre) == false) {
    header("Location: ../view/errors/errorCampoVacioDiario.html");
    break;
} else if (validateNombreDiario($nombre) == false) {
    header("Location: ../view/errors/errorCampoNombreDiario.html");
    break;
} else if (emptyField($descripcion) == false) {
    header("Location: ../view/errors/errorCampoVacioDiario.html");
    break;
} else if (validateDescripcionDiario($descripcion) == false) {
    header("Location: ../view/errors/errorCampoDescripcionDiario.html");
    break;
}
?>