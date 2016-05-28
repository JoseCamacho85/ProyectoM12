<?php

class Anuncio {

    private $id = null;
    private $titulo;
    private $descripcion;
    private $imagen;
    private $usuario;
    private $poi;

    /**
     * constructor de la clase anuncio
     * @param type $id id del objeto anuncio
     * @param type $titulo titulo del objeto anuncio
     * @param type $descripcion descripcion del objeto anuncio
     * @param type $imagen imagen del objeto anuncio
     * @param type $poi poi sobre el que hace referencia el objeto anuncio
     * @param type $usuario usuario que escribe el objeto anuncio
     */
    function __construct($id, $titulo, $descripcion, $imagen, $poi, $usuario) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
        $this->usuario = $usuario;
        $this->poi = $poi;
    }

    /**
     * metodo get del usuario relacionado con el anuncio
     * @return type
     */
    function getUsuario() {
        return $this->usuario;
    }

    /**
     * metodo get del poi relacionado con el anuncio
     * @return type
     */
    function getPoi() {
        return $this->poi;
    }

    /**
     * metodo set del usuario relacionado con el anuncio
     * @param type $usuario usuario relacionado con el anuncio
     */
    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    /**
     * metodo set del poi relacionado con el anuncio
     * @param type $poi poi relacionado con el anuncio
     */
    function setPoi($poi) {
        $this->poi = $poi;
    }

    /*
     * metodo get de la id del anuncio
     */

    function getId() {
        return $this->id;
    }

    /**
     * metodo get del titulo del anuncio
     * @return type
     */
    function getTitulo() {
        return $this->titulo;
    }

    /**
     * metodo get de la descripcion del anuncio
     * @return type
     */
    function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * metodo get de la imagen del anuncio
     * @return type
     */
    function getImagen() {
        return $this->imagen;
    }

    /**
     * metodo set de la id del anuncio
     * @param type $id id del anuncio
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del titulo del anuncio
     * @param type $titulo titulo del anuncio
     */
    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    /**
     * metodo set de la descripcion del anuncio
     * @param type $descripcion descripcion del anuncio
     */
    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    /**
     * metodo set de la imagen del anuncio
     * @param type $imagen imagen del anuncio
     */
    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    /*
     * método en el que se instancia un objeto anuncioDB para insertar en la base de datos
     */

    public function persist() {
        $anuncioDAO = new anuncioDB();
        $id = $anuncioDAO->insertAnuncio($this);
        return $id;
    }

}
