<?php

class Poi {

    private $id = null;
    private $nombre;
    private $foto;
    private $descripcion;
    private $url;
    private $precio;
    private $horario;
    private $id_tipo;
    private $id_transporte;
    private $id_entorno;
    private $id_ciudad;
    private $id_pais;
    private $id_usuario;

    /**
     * constructor de la clase poi
     * @param type $id id del poi
     * @param type $nombre nombre del poi
     * @param type $foto foto del poi
     * @param type $descripcion descripcion del poi
     * @param type $url url del poi
     * @param type $precio precio del poi
     * @param type $horario horario del poi
     * @param type $id_tipo tipo de poi
     * @param type $id_transporte transporte para acceder al poi
     * @param type $id_entorno entorno del poi
     * @param type $id_ciudad ciudad del poi
     * @param type $id_pais pais del poi
     * @param type $id_usuario usuario que inserta el poi
     */
    function __construct($id, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->foto = $foto;
        $this->descripcion = $descripcion;
        $this->url = $url;
        $this->precio = $precio;
        $this->horario = $horario;
        $this->id_tipo = $id_tipo;
        $this->id_transporte = $id_transporte;
        $this->id_entorno = $id_entorno;
        $this->id_ciudad = $id_ciudad;
        $this->id_pais = $id_pais;
        $this->id_usuario = $id_usuario;
    }

    /**
     * metodo get de la id del poi
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del nombre del poi
     * @return type
     */
    function getNombre() {
        return $this->nombre;
    }

    /**
     * metodo get de la foto del poi
     * @return type
     */
    function getFoto() {
        return $this->foto;
    }

    /**
     * metodo get de la descripcion del poi
     * @return type
     */
    function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * metodo get de la url del poi
     * @return type
     */
    function getUrl() {
        return $this->url;
    }

    /**
     * metodo get del precio del poi
     * @return type
     */
    function getPrecio() {
        return $this->precio;
    }

    /**
     * metodo get del horario del poi
     * @return type
     */
    function getHorario() {
        return $this->horario;
    }

    /**
     * metodo set de la id del poi
     * @param type $id id del poi
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del nombre del poi
     * @param type $nombre nombre del poi
     */
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * metodo set de la foto del poi
     * @param type $foto foto del poi
     */
    function setFoto($foto) {
        $this->foto = $foto;
    }

    /**
     * metodo set de la descripcion del poi
     * @param type $descripcion descripcion del poi
     */
    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    /**
     * metodo set de la url del poi
     * @param type $url url del poi
     */
    function setUrl($url) {
        $this->url = $url;
    }

    /**
     * metodo set del precio del poi
     * @param type $precio precio del poi
     */
    function setPrecio($precio) {
        $this->precio = $precio;
    }

    /**
     * metodo set del horario del poi
     * @param type $horario horario del poi
     */
    function setHorario($horario) {
        $this->horario = $horario;
    }

    /**
     * metodo get de la id del tipo de poi
     * @return type
     */
    function getId_tipo() {
        return $this->id_tipo;
    }

    /**
     * metodo get de la id del transporte de poi
     * @return type
     */
    function getId_transporte() {
        return $this->id_transporte;
    }

    /**
     * metodo get de la id del entorno del poi
     * @return type
     */
    function getId_entorno() {
        return $this->id_entorno;
    }

    /**
     * metodo get de la id de la ciudad del poi
     * @return type
     */
    function getId_ciudad() {
        return $this->id_ciudad;
    }

    /**
     * metood get de la id del pais del poi
     * @return type
     */
    function getId_pais() {
        return $this->id_pais;
    }

    /**
     * metodo get de la id del usuario del poi
     * @return type
     */
    function getId_usuario() {
        return $this->id_usuario;
    }

    /**
     * metodo set de la id del tipo de poi
     * @param type $id_tipo id del tipo de poi
     */
    function setId_tipo($id_tipo) {
        $this->id_tipo = $id_tipo;
    }

    /**
     * metodo set de la id del transporte de poi
     * @param type $id_transporte id del transporte de poi
     */
    function setId_transporte($id_transporte) {
        $this->id_transporte = $id_transporte;
    }

    /**
     * metodo set de la id del entorno del poi
     * @param type $id_entorno id del entorno del poi
     */
    function setId_entorno($id_entorno) {
        $this->id_entorno = $id_entorno;
    }

    /**
     * metodo set de la id de la ciudad del poi
     * @param type $id_ciudad id de la ciudad del poi
     */
    function setId_ciudad($id_ciudad) {
        $this->id_ciudad = $id_ciudad;
    }

    /**
     * metodo set de la id del pais del poi
     * @param type $id_pais id del pais del poi
     */
    function setId_pais($id_pais) {
        $this->id_pais = $id_pais;
    }

    /**
     * metodo set de la id del usuario del poi
     * @param type $id_usuario id del usuario del poi
     */
    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    /**
     * metodo que instancia un objeto poiDB para añadir un poi a la base de datos
     * @return type
     */
    public function persist() {
        $poiDAO = new PoiDB();
        $id = $poiDAO->insertPoi($this);
        return $id;
    }

}

?>