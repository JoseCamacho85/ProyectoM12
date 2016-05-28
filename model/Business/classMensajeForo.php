<?php

class MensajeForo {

    private $id = null;
    private $texto;

    /**
     * constructor de la clase mensaje foro
     * @param type $id id del mensaje
     * @param type $texto texto del mensaje
     */
    function __construct($id, $texto) {
        $this->id = $id;
        $this->texto = $texto;
    }

    /**
     * metodo get de la id del mensaje
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del texto del mensaje
     * @return type
     */
    function getTexto() {
        return $this->texto;
    }

    /**
     * metodo set de la id del mensaje
     * @param type $id id del mensaje
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del texto del mensaje
     * @param type $texto texto del mensaje
     */
    function setTexto($texto) {
        $this->texto = $texto;
    }

}
