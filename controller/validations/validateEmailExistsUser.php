<?php
/**
 * método que comprueba si el email introducido es válido
 * @param type $email correo electrónico que comprueba el método
 * @return boolean
 */
function controlFindEmail($email) {
    $validation = true;
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getUsers()); $i++) {
        if (($bitacle->getUsers()[$i]->getEmail() == $email)) {
            $validation = false;
        } else {
            $validation = true;
        }
    }
    return $validation;
}

?>