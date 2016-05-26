<?php

if (emptyField($nombre) == false) {
    header("Location: ../view/errors/errorCamposVaciosPoi.html");
    break;
} else if (validateNombrePoi($nombre) == false) {
    header("Location: ../view/errors/errorCampoNombrePoi.html");
    break;
} else if (emptyField($descripcion) == false) {
    header("Location: ../view/errors/errorCamposVaciosPoi.html");
    break;
} else if (validateDescripcion($descripcion) == false) {
    header("Location: ../view/errors/errorCampoDescripcionPoi.html");
    break;
} else if (validateUrls($url) == false) {
    header("Location: ../view/errors/errorCampoUrlPoi.html");
    break;
} else if (validatePrecio($precio) == false) {
    header("Location: ../view/errors/errorCampoPrecioPoi.html");
    break;
} else if (validateHorario($horario) == false) {
    header("Location: ../view/errors/errorCampoHorarioPoi.html");
    break;
}
?>