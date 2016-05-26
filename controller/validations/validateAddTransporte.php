<?php

if (emptyField($transporte) == false) {
    header("Location: ../view/errors/errorCamposVaciosPoi.html");
    break;
} else if (controlFindTransporte($transporte) == false) {
    header("Location: ../view/errors/errorCampoNombreExisteTransporte.html");
    break;
}
?>