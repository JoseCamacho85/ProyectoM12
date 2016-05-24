<?php

class MensajePrivado {
    
    private $id = null;
    private $titulo;
    private $texto;
    private $destinatario;
    private $id_emisor;
    
    
    function __construct($id, $titulo, $texto, $destinatario, $id_emisor) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->destinatario = $destinatario;
        $this->id_emisor = $id_emisor;
    }

    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getTexto() {
        return $this->texto;
    }

    function getDestinatario() {
        return $this->destinatario;
    }
    
    function getId_emisor() {
        return $this->id_emisor;
    }

        function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }

    function setDestinatario($destinatario) {
        $this->destinatario = $destinatario;
    }
    
    function setId_emisor($id_emisor) {
        $this->id_emisor = $id_emisor;
    }

    public function persist() {
        $MPDAO = new MensajePrivadoDB();
        $id = $MPDAO->insertMensajePrivado($this);
        return $id;
    }

}
