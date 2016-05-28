<?php

class Usuario {

    private $id;
    private $username;
    private $password;
    private $email;
    private $poblacion;
    private $idioma;
    private $telefono;
    private $url;
    private $foto;
    private $textoPresentacion;
    private $administrador;
    private $registrado;
    private $professional;

    /**
     * constructor de la clase usuario
     * @param type $id id del usuario
     * @param type $username nombre del usuario
     * @param type $password contraseña del usuario
     * @param type $email email del usuario
     * @param type $poblacion poblacion del usuario
     * @param type $idioma idioma del usuario
     * @param type $telefono telefono del usuario
     * @param type $url sitio web del usuario
     * @param type $foto foto de perfil del usuario
     * @param type $textoPresentacion texto de presentacion del usuario
     * @param type $administrador booleano que es true si el usuario es administrador
     * @param type $registrado booleano que es true si el usuario esta registrado
     * @param type $professional booleano que es true si el usuario es un profesional
     */
    function __construct($id, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion, $administrador, $registrado, $professional) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->poblacion = $poblacion;
        $this->idioma = $idioma;
        $this->telefono = $telefono;
        $this->url = $url;
        $this->foto = $foto;
        $this->textoPresentacion = $textoPresentacion;
        $this->administrador = $administrador;
        $this->registrado = $registrado;
        $this->professional = $professional;
    }

    /**
     * metodo get de la id de usuario
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del nombre de usuario
     * @return type
     */
    function getUsername() {
        return $this->username;
    }

    /**
     * metodo get del password de usuario
     * @return type
     */
    function getPassword() {
        return $this->password;
    }

    /**
     * metodo get del email de usuario
     * @return type
     */
    function getEmail() {
        return $this->email;
    }

    /**
     * metodo get de la poblacion del usuario
     * @return type
     */
    function getPoblacion() {
        return $this->poblacion;
    }

    /**
     * metodo get del idioma del usuario
     * @return type
     */
    function getIdioma() {
        return $this->idioma;
    }

    /**
     * metodo get del telefono del usuario
     * @return type
     */
    function getTelefono() {
        return $this->telefono;
    }

    /**
     * metodo get de la url del usuario
     * @return type
     */
    function getUrl() {
        return $this->url;
    }

    /**
     * metodo get de la foto de usuario
     * @return type
     */
    function getFoto() {
        return $this->foto;
    }

    /**
     * metodo get del texto de presentacion del usuario
     * @return type
     */
    function getTextoPresentacion() {
        return $this->textoPresentacion;
    }

    /**
     * metodo set de la id del usuario
     * @param type $id id del usuario
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del nombre de usuario
     * @param type $username nombre de usuario
     */
    function setUsername($username) {
        $this->username = $username;
    }

    /**
     * metodo set del password del usuario
     * @param type $password password de usuario
     */
    function setPassword($password) {
        $this->password = $password;
    }

    /**
     * metodo set del correo electronico del usuario
     * @param type $email correo electronico del usuario
     */
    function setEmail($email) {
        $this->email = $email;
    }

    /**
     * metodo set de la poblacion del usuario
     * @param type $poblacion poblacion del usuario
     */
    function setPoblacion($poblacion) {
        $this->poblacion = $poblacion;
    }

    /**
     * metodo set del idioma del usuario
     * @param type $idioma idioma del usuario
     */
    function setIdioma($idioma) {
        $this->idioma = $idioma;
    }

    /**
     * metodo set del telefono del usuario
     * @param type $telefono telefono del usuario
     */
    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    /**
     * metodo set del sitio web del usuario
     * @param type $url sitio web del usuario
     */
    function setUrl($url) {
        $this->url = $url;
    }

    /**
     * metodo set de la foto de perfil del usuario
     * @param type $foto foto de perfil del usuario
     */
    function setFoto($foto) {
        $this->foto = $foto;
    }

    /**
     * metodo set del texto de presentacion del usuario
     * @param type $textoPresentacion texto de presentacion del usuario
     */
    function setTextoPresentacion($textoPresentacion) {
        $this->textoPresentacion = $textoPresentacion;
    }

    /**
     * metodo get del booleano que verifica si es usuario administrador
     * @return type
     */
    function getAdministrador() {
        return $this->administrador;
    }

    /**
     * metodo set del booleano que verifica si es usuario administrador
     * @param type $administrador checkbox de usuario administrador
     */
    function setAdministrador($administrador) {
        $this->administrador = $administrador;
    }

    /**
     * metodo get del booleano que verifica si es usuario registrado
     * @return type
     */
    function getRegistrado() {
        return $this->registrado;
    }

    /**
     * metodo set del booleano que verifica si es usuario registrado
     * @param type $registrado checkbox de usuario registrado
     */
    function setRegistrado($registrado) {
        $this->registrado = $registrado;
    }

    /**
     * metodo get del booleano que verifica si es usuario professional
     * @return type
     */
    function getProfessional() {
        return $this->professional;
    }

    /**
     * metodo set del booleano que verifica si es usuario profesional
     * @param type $professional checkbox de usuario profesional
     */
    function setProfessional($professional) {
        $this->professional = $professional;
    }

    /**
     * método que instancia un objeto usuarioDB para crear un usuario en la base de datos
     * @return type
     */
    public function persist() {
        $userDAO = new UsuarioDB();
        $id = $userDAO->insertUser($this);
        return $id;
    }

}
