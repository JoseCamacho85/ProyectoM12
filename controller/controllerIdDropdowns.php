<?php

function cogerId($pais, $id_tipo) {
    for ($i = 0; $i < count($pais); $i++) {
        if ($pais[$i]->getNombre() == $id_tipo) {
            $id_tipo1 = $pais[$i]->getId();
        }
    }

    $id_tipo2 = intval($id_tipo1);

    return $id_tipo2;
}

?>