<?php

if (emptyField($ruta) == false) {
    header("Location: ../view/errors/errorCampoVacioRuta.html");
    break;
} else if (validateNombreRuta($ruta) == false) {
    header("Location: ../view/errors/errorCampoNombreRuta.html");
    break;
} else if (emptyField($descripcion) == false) {
    header("Location: ../view/errors/errorCampoVacioRuta.html");
    break;
} else if (validateDescripcionRuta($descripcion) == false) {
    header("Location: ../view/errors/errorCampoDescripcionRuta.html");
    break;
}
?>