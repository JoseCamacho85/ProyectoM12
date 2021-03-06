<?php

class Ruta {

    private $id = null;
    private $nombre;
    private $descripcion;
    private $usuario;

    /**
     * constructor de la clase ruta
     * @param type $id id de la ruta
     * @param type $nombre nombre de la ruta
     * @param type $descripcion descripcion de la ruta
     * @param type $usuario usuario que crea la ruta
     */
    function __construct($id, $nombre, $descripcion, $usuario) {
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setDescripcion($descripcion);
        $this->setUsuario($usuario);
    }

    /**
     * metodo get de la id de la ruta
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del nombre de la ruta
     * @return type
     */
    function getNombre() {
        return $this->nombre;
    }

    /**
     * metodo get de la descripcion de la ruta
     * @return type
     */
    function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * emtodo set de la id de la ruta
     * @param type $id id de la ruta
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del nombre de la ruta
     * @param type $nombre nombre de la ruta
     */
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * metodo set de la descripcion de la ruta
     * @param type $descripcion descripcion de la ruta
     */
    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    /**
     * metodo get del usuario de la ruta
     * @return type
     */
    function getUsuario() {
        return $this->usuario;
    }

    /**
     * metodo set del usuario de la ruta
     * @param type $usuario usuario de la ruta
     */
    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    /**
     * metodo que instancia un objeto rutaDB para añadir una ruta a la base de datos
     * @return type
     */
    public function persist() {
        $rutaDAO = new RutaDB();
        $id = $rutaDAO->insertRuta($this);
        return $id;
    }

}
