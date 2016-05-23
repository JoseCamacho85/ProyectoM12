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
    private $historial = null;
    private $MP = null;

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
        $this->historial = array();
        $this->MP = array();
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

    function getHistorial() {
        return $this->historial;
    }

    function setHistorial($historial) {
        $this->historial = $historial;
    }

    function getMP() {
        return $this->MP;
    }

    function setMP($MP) {
        $this->MP = $MP;
    }

        
    
    public function insertUser($id, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion, $administrador, $registrado, $professional) {
        $user = new Usuario($id, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion, $administrador, $registrado, $professional);
        $id = $user->persist();
        $user->setId($id);
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

    public function insertTipo($id, $tipo) {
        $tipo = new Tipo($id, $tipo);
        $id = $tipo->persist();
        $tipo->setId($id);
        array_push($this->tipos, $tipo);
        return $tipo;
    }
    public function insertMP($titulo,$message,$usuarioReceptor,$id_usuario) {
        $MP = new MensajePrivado($titulo,$message,$usuarioReceptor,$id_usuario);
        $id = $MP->persist();
        $MP->setId($id);
        array_push($this->MP, $MP);
        return $MP;
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

    public function populatePois() {
        $bitacleDB = new BitacleDB();
        $arrayPois = $bitacleDB->fetchPoi();
        for ($i = 0; $i < count($arrayPois); $i++) {
            array_push($this->pois, $arrayPois[$i]);
        }
    }

    public function populateUsuarios() {
        $bitacleDB = new BitacleDB();
        $arrayUsuarios = $bitacleDB->fetchUsuario();
        for ($i = 0; $i < count($arrayUsuarios); $i++) {
            array_push($this->users, $arrayUsuarios[$i]);
        }
    }

    public function populateRutas() {
        $bitacleDB = new BitacleDB();
        $arrayRutas = $bitacleDB->fetchRuta();
        for ($i = 0; $i < count($arrayRutas); $i++) {
            array_push($this->rutas, $arrayRutas[$i]);
        }
    }

    public function populateDiarios() {
        $bitacleDB = new BitacleDB();
        $arrayDiarios = $bitacleDB->fetchDiario();
        for ($i = 0; $i < count($arrayDiarios); $i++) {
            array_push($this->diarios, $arrayDiarios[$i]);
        }
    }

    public function populateHistorial() {
        $bitacleDB = new BitacleDB();
        $arrayHistoriales = $bitacleDB->fetchHistorial();
        for ($i = 0; $i < count($arrayHistoriales); $i++) {
            array_push($this->historial, $arrayHistoriales[$i]);
        }
    }
    public function populateAnuncios() {
        $bitacleDB = new BitacleDB();
        $arrayAnuncios = $bitacleDB->fetchAnuncio();
        for ($i = 0; $i < count($arrayAnuncios); $i++) {
            array_push($this->anuncios, $arrayAnuncios[$i]);
        }
    }

    public function VerDetallesPOI($idPOI) {

        for ($i = 0; $i < count($this->getPois()); $i++) {
            if ($this->getPois()[$i]->getId() == $idPOI) {
                $detall = $this->getPois()[$i];
            }
        }
        return $detall;
    }

    public function VerDetallesRuta($idRuta) {

        for ($i = 0; $i < count($this->getRutas()); $i++) {
            if ($this->getRutas()[$i]->getId() == $idRuta) {
                $detall = $this->getRutas()[$i];
            }
        }
        return $detall;
    }

    public function VerDetallesUsuario($idUsuario) {

        for ($i = 0; $i < count($this->getUsers()); $i++) {
            if ($this->getUsers()[$i]->getId() == $idUsuario) {
                $detall = $this->getUsers()[$i];
            }
        }
        return $detall;
    }

    public function VerDetallesDiario($idDiario) {

        for ($i = 0; $i < count($this->getDiarios()); $i++) {
            if ($this->getDiarios()[$i]->getId() == $idDiario) {
                $detall = $this->getDiarios()[$i];
            }
        }
        return $detall;
    }

    public function crearQuery($fields, $fieldNames) {
        $bitacleDB = new BitacleDB();
        $arrayCrearQuery = $bitacleDB->crearQueryDB($fields, $fieldNames);
        return $arrayCrearQuery;
    }

    public function VerRutaPoi($idRuta) {
        $bitacleDB = new BitacleDB();
        $arrayRutasPoi = $bitacleDB->DropdownPoisRuta($idRuta);
        //for ($i = 0; $i < count($arrayRutas); $i++) {
        //  array_push($this->rutas, $arrayRutas[$i]);
        //}
        return $arrayRutasPoi;
    }

    public function VerDiarioPoi($idDiario) {
        $bitacleDB = new BitacleDB();
        $arrayDiariosPoi = $bitacleDB->DropdownPoisDiario($idDiario);
        return $arrayDiariosPoi;
    }

    public function insertDiarioPoi($idDiario, $idPOI) {
        $bitacleDB = new DiarioPoiDB();
        $objecteHistorial = $bitacleDB->insertDiarioPoi($idDiario, $idPOI);
        //array_push($this->historial, $objecteHistorial);
    }

    public function modificarDatosUsuario($id, $username, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion){
        $bitacleDB = new BitacleDB();
        $bitacleDB->modificarDatosUsuario($id, $username, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion);
    }
    
    public function modificarHistorial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video){
        $bitacleDB = new BitacleDB();
        $bitacleDB->modificarHistorial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video);
    }

    public function modificarAnuncio($titulo, $descripcion,$imagen, $id_poi, $id_usuario){
        $bitacleDB = new BitacleDB();
        $bitacleDB->modificarAnuncio($titulo, $descripcion,$imagen,$id_poi, $id_usuario);
    }

    public function modificarPoi($id_poi,$nombre, $foto, $descripcion, $url, $precio, $horario){
        $bitacleDB = new BitacleDB();
        $bitacleDB->modificarPoi($id_poi,$nombre, $foto, $descripcion, $url, $precio, $horario);
    }

    public function eliminarPoi($id){
        $bitacleDB = new BitacleDB();
        $bitacleDB->eliminarPoi($id);
        $arrayAux = []; 
        for ($i = 0; $i<count($this->getPois()); $i++){

            if (($this->getPois()[$i]->getId()!=$id)){
                //echo "ID objeto FOR:".$this->employees[$i]->getId()."<br>"; 
                array_push($arrayAux, $this->getPois()[$i]);             
            }
    
        }   
        $this->setPois($arrayAux);
    }

    public function eliminarUser($id){
        $bitacleDB = new BitacleDB();
        $bitacleDB->eliminarUser($id);
        $arrayAux = []; 
        for ($i = 0; $i<count($this->getUsers()); $i++){

            if (($this->getUsers()[$i]->getId()!=$id)){
                //echo "ID objeto FOR:".$this->employees[$i]->getId()."<br>"; 
                array_push($arrayAux, $this->getUsers()[$i]);             
            }
    
        }   
        $this->setUsers($arrayAux);
    }
}
