<?php

class TemaForo {

    private $id = null;
    private $titulo;

    /**
     * constructor de la clase tema foro
     * @param type $id id del tema del foro
     * @param type $titulo titul del tema del foro
     */
    function __construct($id, $titulo) {
        $this->id = $id;
        $this->titulo = $titulo;
    }

    /**
     * metodo get de la id del foro
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del titulo del foro
     * @return type
     */
    function getTitulo() {
        return $this->titulo;
    }

    /**
     * metodo set de la id del tema de foro
     * @param type $id id del tema de foro
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del titulo del tema de foro
     * @param type $titulo id del titulo de foro
     */
    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

}
