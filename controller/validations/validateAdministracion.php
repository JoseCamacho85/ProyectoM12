<?php

if (emptyField($username) == false) {
    header("Location: ../view/errors/errorCamposVaciosUserAdmin.html");
    break;
} else if (validateUsername($username) == false) {
    header("Location: ../view/errors/errorCampoUsernameUserAdmin.html");
    break;
} else if (emptyField($password) == false) {
    header("Location: ../view/errors/errorCamposVaciosUserAdmin.html");
    break;
} else if (validatePassword($password) == false) {
    header("Location: ../view/errors/errorCampoPasswordUserAdmin.html");
    break;
} else if (emptyField($email) == false) {
    header("Location: ../view/errors/errorCamposVaciosUserAdmin.html");
    break;
} else if (validateEmail($email) == false) {
    header("Location: ../view/errors/errorCampoEmailUserAdmin.html");
    break;
} else if (validatePoblacion($poblacion) == false) {
    header("Location: ../view/errors/errorCampoPoblacionUserAdmin.html");
    break;
} else if (validateIdioma($idioma) == false) {
    header("Location: ../view/errors/errorCampoIdiomaUserAdmin.html");
    break;
} else if (validateTelefono($telefono) == false) {
    header("Location: ../view/errors/errorCampoTelefonoUserAdmin.html");
    break;
} else if (validateUrl($url) == false) {
    header("Location: ../view/errors/errorCampoUrlUserAdmin.html");
    break;
} else if (validateTextoPresentacion($textoPresentacion) == false) {
    header("Location: ../view/errors/errorCampoTextoPresentacionUserAdmin.html");
    break;
}
?>