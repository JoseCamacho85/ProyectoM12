<?php

class classForo {

    private $id = null;

    /**
     * constructor de la clase foro
     * @param type $id id del foro
     */
    function __construct($id) {
        $this->id = $id;
    }

    /**
     * metodo get de la id de la clase foro
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo set de la id de la clase foro
     * @param type $id id del foro
     */
    function setId($id) {
        $this->id = $id;
    }

}
