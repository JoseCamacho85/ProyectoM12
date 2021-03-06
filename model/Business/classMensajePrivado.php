<?php

class MensajePrivado {

    private $id = null;
    private $titulo;
    private $texto;
    private $destinatario;
    private $id_emisor;

    /**
     * constructor de la clase mensaje privado
     * @param type $id id del mensaje
     * @param type $titulo titulo del mensaje
     * @param type $texto texto del mensaje
     * @param type $destinatario destinatario del mensaje
     * @param type $id_emisor emisor del mensaje
     */
    function __construct($id, $titulo, $texto, $destinatario, $id_emisor) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->destinatario = $destinatario;
        $this->id_emisor = $id_emisor;
    }

    /**
     *  metodo get de la id del mensaje
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del titulo del mensaje
     * @return type
     */
    function getTitulo() {
        return $this->titulo;
    }

    /**
     * metodo get del texto del mensaje
     * @return type
     */
    function getTexto() {
        return $this->texto;
    }

    /**
     * metodo get del destinatario del mensaje
     * @return type
     */
    function getDestinatario() {
        return $this->destinatario;
    }

    /**
     * metodo get de la id del emisor del mensaje
     * @return type
     */
    function getId_emisor() {
        return $this->id_emisor;
    }

    /**
     * metodo set de la id del mensaje
     * @param type $id id del mensaje
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del titulo del mensaje
     * @param type $titulo titulo del mensaje
     */
    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    /**
     * metodo set del texto del mensaje
     * @param type $texto texto del mensaje
     */
    function setTexto($texto) {
        $this->texto = $texto;
    }

    /**
     * metodo set del destinatario del mensaje
     * @param type $destinatario destinatario del mensaje
     */
    function setDestinatario($destinatario) {
        $this->destinatario = $destinatario;
    }

    /**
     * metodo set de la id del emisor del mensaje
     * @param type $id_emisor id del emisor del mensaje
     */
    function setId_emisor($id_emisor) {
        $this->id_emisor = $id_emisor;
    }

    /**
     * metodo que instancia un objeto de la clase mensajePrivadoDB para añadir un mensaje privado a la base de datos
     * @return type
     */
    public function persist() {
        $MPDAO = new MensajePrivadoDB();
        $id = $MPDAO->insertMensajePrivado($this);
        return $id;
    }

}
