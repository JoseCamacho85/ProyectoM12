<?php

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