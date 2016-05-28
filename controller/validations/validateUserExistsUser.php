<?php
/**
 * controla que el nombre de usuario no exista para evitar usuarios duplicados
 * @param type $username nombre de usuario
 * @return boolean
 */
function controlFindUser($username) {
    $validation = true;
    $bitacle = unserialize($_SESSION['bitacle']);

    for ($i = 0; $i < count($bitacle->getUsers()); $i++) {
        if (($bitacle->getUsers()[$i]->getUsername() == $username)) {
            $validation = false;
        } else {
            $validation = true;
        }
    }
    return $validation;
}

?>