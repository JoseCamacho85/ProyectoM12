<?php

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