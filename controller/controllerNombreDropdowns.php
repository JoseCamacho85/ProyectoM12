<?php

function cogerNombre($clase, $id) {
    for ($i = 0; $i < count($clase); $i++) {
        if ($clase[$i]->getId() == $id) {
            $nombre = $clase[$i]->getNombre();
        }
    }
    return $nombre;
}

?>