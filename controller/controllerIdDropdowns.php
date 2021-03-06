<?php
/**
 * metodo para coger la id del pais
 * @param type $pais pais que del que obtenemos la id
 * @param type $id_tipo id del tipo
 * @return type
 */
function cogerId($pais, $id_tipo) {
    for ($i = 0; $i < count($pais); $i++) {
        if ($pais[$i]->getNombre() == $id_tipo) {
            $id_tipo1 = $pais[$i]->getId();
        }
    }
    $id_tipo2 = intval($id_tipo1);
    return $id_tipo2;
}
/**
 * metodo para coger la id del usuario
 * @param type $clase usuario donde cogeremos la id
 * @param type $id_tipo id del tipo
 * @return type
 */
function cogerIdUsuario($clase, $id_tipo) {
    for ($i = 0; $i < count($clase); $i++) {
        if ($clase[$i]->getUsername() == $id_tipo) {
            $id_tipo1 = $clase[$i]->getId();
        }
    }
    $id_tipo2 = intval($id_tipo1);
    return $id_tipo2;
}

?>