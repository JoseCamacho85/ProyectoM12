<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of POI
 *
 * @author Mazu
 */
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

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFoto() {
        return $this->foto;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getUrl() {
        return $this->url;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getHorario() {
        return $this->horario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function getId_tipo() {
        return $this->id_tipo;
    }

    function getId_transporte() {
        return $this->id_transporte;
    }

    function getId_entorno() {
        return $this->id_entorno;
    }

    function getId_ciudad() {
        return $this->id_ciudad;
    }

    function getId_pais() {
        return $this->id_pais;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function setId_tipo($id_tipo) {
        $this->id_tipo = $id_tipo;
    }

    function setId_transporte($id_transporte) {
        $this->id_transporte = $id_transporte;
    }

    function setId_entorno($id_entorno) {
        $this->id_entorno = $id_entorno;
    }

    function setId_ciudad($id_ciudad) {
        $this->id_ciudad = $id_ciudad;
    }

    function setId_pais($id_pais) {
        $this->id_pais = $id_pais;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function persist() {
        $poiDAO = new PoiDB();
        $id = $poiDAO->insertPoi($this);
        return $id;
    }

}

?>