<?php

if (emptyField($titulo) == false) {
    header("Location: ../view/errors/errorCampoVacioAnuncio.html");
    break;
} else if (validateNombreAnuncio($titulo) == false) {
    header("Location: ../view/errors/errorCampoNombreAnuncio.html");
    break;
} else if (emptyField($descripcion) == false) {
    header("Location: ../view/errors/errorCampoVacioAnuncio.html");
    break;
} else if (validateDescripcionAnuncio($descripcion) == false) {
    header("Location: ../view/errors/errorCampoDescripcionAnuncio.html");
    break;
}
?>