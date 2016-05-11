<?php

include_once("model/functionAutoload.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classBitacle
 *
 * @author Mazu
 */
class Bitacle {

    private $id = null;
    private $nom;
    private $users = null;
    private $pois = null;
    private $rutas = null;
    private $diarios = null;
    private $anuncios = null;
    private $ciudades = null;
    private $tipos = null;
    private $transportes = null;
    private $entornos = null;
    private $paises = null;

    function __construct($nom) {
        @$this->id = $id;
        $this->nom = $nom;
        $this->users = array();
        $this->pois = array();
        $this->rutas = array();
        $this->diarios = array();
        $this->anuncios = array();
        $this->ciudades = array();
        $this->tipos = array();
        $this->transportes = array();
        $this->entornos = array();
        $this->paises = array();
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    public function getUsers() {
        return $this->users;
    }

    public function setUsers($users) {
        $this->users = $users;
    }

    public function getPois() {
        return $this->pois;
    }

    public function setPois($pois) {
        $this->pois = $pois;
    }

    public function getRutas() {
        return $this->rutas;
    }

    public function setRutas($rutas) {
        $this->rutas = $rutas;
    }

    public function getDiarios() {
        return $this->diarios;
    }

    public function setDiarios($diarios) {
        $this->diarios = $diarios;
    }

    public function setCiudades($ciudades) {
        $this->ciudades = $ciudades;
    }

    public function getCiudades() {
        return $this->ciudades;
    }

    function getAnuncios() {
        return $this->anuncios;
    }

    function getTipos() {
        return $this->tipos;
    }

    function getTransportes() {
        return $this->transportes;
    }

    function getEntornos() {
        return $this->entornos;
    }

    function getPaises() {
        return $this->paises;
    }

    function setAnuncios($anuncios) {
        $this->anuncios = $anuncios;
    }

    function setTipos($tipos) {
        $this->tipos = $tipos;
    }

    function setTransportes($transportes) {
        $this->transportes = $transportes;
    }

    function setEntornos($entornos) {
        $this->entornos = $entornos;
    }

    function setPaises($paises) {
        $this->paises = $paises;
    }

    public function insertUser($id, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion) {
        $user = new Usuario($id, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion);
        $id = $user->persist();
        $user->setId($id);
        echo $id;
        array_push($this->users, $user);
        return $user;
    }

    public function insertPoi($id, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario) {
        $poi = new Poi($id, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario);
        $id = $poi->persist();
        $poi->setId($id);
        array_push($this->pois, $poi);
        return $poi;
    }

    public function insertRuta($id, $nombre, $descripcion, $id_usuario) {
        $ruta = new Ruta($id, $nombre, $descripcion, $id_usuario);
        $id = $ruta->persist();
        $ruta->setId($id);
        array_push($this->rutas, $ruta);
        return $ruta;
    }

    public function insertDiario($id, $nombre, $descripcion, $id_usuario) {
        $diario = new Diario($id, $nombre, $descripcion, $id_usuario);
        $id = $diario->persist();
        $diario->setId($id);
        array_push($this->diarios, $diario);
        return $diario;
    }

    public function insertAnuncio($id, $titulo, $descripcion, $imagen, $id_poi, $id_usuario) {
        $anuncio = new Anuncio($id, $titulo, $descripcion, $imagen, $id_poi, $id_usuario);
        $id = $anuncio->persist();
        $anuncio->setId($id);
        array_push($this->anuncios, $anuncio);
        return $anuncio;
    }

    public function validateUser($user, $password) {
        $bitacleDB = new BitacleDB();
        $validate = $bitacleDB->fetchValidateUser($user, $password);
        return $validate;
    }

    public function populateTipos() {
        $bitacleDB = new BitacleDB();
        $arrayTipos = $bitacleDB->fetchTipo();
        for ($i = 0; $i < count($arrayTipos); $i++) {
            array_push($this->tipos, $arrayTipos[$i]);
        }
    }

    public function populateTransportes() {
        $bitacleDB = new BitacleDB();
        $arrayTransportes = $bitacleDB->fetchTransporte();
        for ($i = 0; $i < count($arrayTransportes); $i++) {
            array_push($this->transportes, $arrayTransportes[$i]);
        }
    }

    public function populateEntornos() {
        $bitacleDB = new BitacleDB();
        $arrayEntornos = $bitacleDB->fetchEntorno();
        for ($i = 0; $i < count($arrayEntornos); $i++) {
            array_push($this->entornos, $arrayEntornos[$i]);
        }
    }

    public function populateCiudades() {
        $bitacleDB = new BitacleDB();
        $arrayCiudades = $bitacleDB->fetchCiudad();
        for ($i = 0; $i < count($arrayCiudades); $i++) {
            array_push($this->ciudades, $arrayCiudades[$i]);
        }
    }

    public function populatePaises() {
        $bitacleDB = new BitacleDB();
        $arrayPaises = $bitacleDB->fetchPais();
        for ($i = 0; $i < count($arrayPaises); $i++) {
            array_push($this->paises, $arrayPaises[$i]);
        }
    }

}
