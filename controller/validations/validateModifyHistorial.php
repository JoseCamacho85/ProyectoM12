<?php

if (validateTexto($texto) == false) {
    header("Location: ../view/errors/errorCampoTextoHistorial.html");
    break;
}
?>