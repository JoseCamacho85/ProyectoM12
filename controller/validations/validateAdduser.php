<?php

if (emptyField($username) == false) {
    header("Location: ../view/errors/errorCamposVaciosUser.html");
    break;
} else if (validateUsername($username) == false) {
    header("Location: ../view/errors/errorCampoUserNameUser.html");
    break;
} else if (controlFindUser($username) == false) {
    header("Location: ../view/errors/errorCampoUsernameExisteUser.html");
    break;
} else if (emptyField($password) == false) {
    header("Location: ../view/errors/errorCamposVaciosUser.html");
    break;
} else if (validatePassword($password) == false) {
    header("Location: ../view/errors/errorCampoPasswordUser.html");
    break;
} else if (emptyField($email) == false) {
    header("Location: ../view/errors/errorCamposVaciosUser.html");
    break;
} else if (validateEmail($email) == false) {
    header("Location: ../view/errors/errorCampoEmailUser.html");
    break;
} else if (controlFindEmail($email) == false) {
    header("Location: ../view/errors/errorCampoEmailExisteUser.html");
    break;
} else if (validatePoblacion($poblacion) == false) {
    header("Location: ../view/errors/errorCampoPoblacionUser.html");
    break;
} else if (validateIdioma($idioma) == false) {
    header("Location: ../view/errors/errorCampoIdiomaUser.html");
    break;
} else if (validateTelefono($telefono) == false) {
    header("Location: ../view/errors/errorCampoTelefonoUser.html");
    break;
} else if (validateUrl($url) == false) {
    header("Location: ../view/errors/errorCampoUrlUser.html");
    break;
} else if (validateTextoPresentacion($textoPresentacion) == false) {
    header("Location: ../view/errors/errorCampoTextoPresentacionUser.html");
    break;
}
?>