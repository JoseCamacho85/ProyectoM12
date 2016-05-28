<?php

class Historial {

    private $id_diario;
    private $id_poi;
    private $fechaVisitaPoi;
    private $estaEnPoi;
    private $texto;
    private $foto;
    private $video;

    /**
     * constructor de la clase historial
     * @param type $id_diario id del diario sobre el que se inserta un poi
     * @param type $id_poi id del poi que se inserta en el diario
     * @param type $fechaVisitaPoi fecha de visita en el poi
     * @param type $estaEnPoi checkbox que verifica que se ha visitado ese poi
     * @param type $texto texto del hostorial
     * @param type $foto foto del historial
     * @param type $video video del historial
     */
    function __construct($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video) {
        $this->setId_diario($id_diario);
        $this->setId_poi($id_poi);
        $this->setFechaVisitaPoi($fechaVisitaPoi);
        $this->setEstaEnPoi($estaEnPoi);
        $this->setTexto($texto);
        $this->setFoto($foto);
        $this->setVideo($video);
    }

    /**
     * metodo get de ls id del diario de la clase historial
     * @return type
     */
    function getId_diario() {
        return $this->id_diario;
    }

    /**
     * metodo get de la id del poi de la clase historial
     * @return type
     */
    function getId_poi() {
        return $this->id_poi;
    }

    /**
     * metodo get de la fecha de visita de la clase historial
     * @return type
     */
    function getFechaVisitaPoi() {
        return $this->fechaVisitaPoi;
    }

    /**
     * metodo get de la verificacion de lugar visitado en la clase historial
     * @return type
     */
    function getEstaEnPoi() {
        return $this->estaEnPoi;
    }

    /**
     * metodo get del texto de la clase historial
     * @return type
     */
    function getTexto() {
        return $this->texto;
    }

    /**
     * metodo get de la foto de la clase historial
     * @return type
     */
    function getFoto() {
        return $this->foto;
    }

    /**
     * metodo get del video de la clase historial
     * @return type
     */
    function getVideo() {
        return $this->video;
    }

    /**
     * metodo set de la id del diario de la clase historial
     * @param type $id_diario id del diario
     */
    function setId_diario($id_diario) {
        $this->id_diario = $id_diario;
    }

    /**
     * metodo set de la id del poi de la clase hostorial
     * @param type $id_poi id del poi
     */
    function setId_poi($id_poi) {
        $this->id_poi = $id_poi;
    }

    /**
     * metodo set de la fecha de visita de la clase historial
     * @param type $fechaVisitaPoi fecha de visita en el poi
     */
    function setFechaVisitaPoi($fechaVisitaPoi) {
        $this->fechaVisitaPoi = $fechaVisitaPoi;
    }

    /**
     * metodo set de la verificacion de lugar visitado en la clase historial
     * @param type $estaEnPoi checkbox que confirma que se ha estado en ese sitio
     */
    function setEstaEnPoi($estaEnPoi) {
        $this->estaEnPoi = $estaEnPoi;
    }

    /**
     * metodo set del texto de la clase historial
     * @param type $texto texto de la clase historial
     */
    function setTexto($texto) {
        $this->texto = $texto;
    }

    /**
     * metodo set de la foto del historial
     * @param type $foto foto del historial
     */
    function setFoto($foto) {
        $this->foto = $foto;
    }

    /**
     * metodo set del video de la clase historial
     * @param type $video video de la clase historial
     */
    function setVideo($video) {
        $this->video = $video;
    }

    /**
     * metodo que instancia un objeto diarioPoiDB para insertar un historial a la base de datos
     * @return type
     */
    public function persist() {
        $historialDAO = new DiarioPoiDB();
        $id = $historialDAO->insertDiarioPoi($this->id_diario, $this->id_poi);
        return $id;
    }

}
