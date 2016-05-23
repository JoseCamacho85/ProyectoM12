<?php

class MensajePrivado {
    
    private $id = null;
    private $titulo;
    private $texto;
    private $destinatario;
    
    
    function __construct($id, $titulo, $texto, $destinatario) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->destinatario = $destinatario;
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
    
    public function persist() {
        $MPDAO = new MensajePrivadoDB();
        $id = $MPDAO->insertMensajePrivado($this);
        return $id;
    }

}
