<?php

if (emptyField($entorno) == false) {
    header("Location: ../view/errors/errorCamposVaciosEntorno.html");
    break;
} else if (controlFindEntorno($entorno) == false) {
    header("Location: ../view/errors/errorCampoNombreExisteEntorno.html");
    break;
}
?>