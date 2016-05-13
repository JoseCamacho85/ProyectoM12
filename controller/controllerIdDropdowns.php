<?php

function cogerId($clase, $id_tipo) {
    for ($i = 0; $i < count($clase); $i++) {
        if ($clase[$i]->getNombre() == $id_tipo) {
            $id_tipo1 = $clase[$i]->getId();
        }
    }

    $id_tipo2 = intval($id_tipo1);

    return $id_tipo2;
}

?>