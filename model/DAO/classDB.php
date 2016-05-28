<?php

include("dbConnector.php");

class DB extends PDO {

    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $dbh;
    private $error;

    /**
     * constructor de la clase DB
     */
    public function __construct() {

        $this->setHost($GLOBALS['server']);
        $this->setUser($GLOBALS['USER']);
        $this->setPass($GLOBALS['PASS']);
        $this->setDbName($GLOBALS['dbname']);
        $this->Open();
    }

    /**
     * metodo para abrir conexion de base de datos
     */
    public function Open() {
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8';
            parent::__construct($dsn, $this->getUser(), $this->getPass());
        } catch (Exception $e) {
            echo "ERROR AL CREAR CONEXION";
        }
    }

    /**
     * metodo para ejecutar un nonQuery
     * @param type $nonquery sentencia preparada para ejecutarse
     */
    public function executeNonQuery($nonquery) {
        $nonquery->execute();
    }

    /**
     * metodo para ejecutar una query
     * @param type $query query preparada para ejecutarse
     * @return type
     */
    public function executeQuery($query) {
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    /**
     * metodo get del nombre de la clase DB
     * @return type
     */
    public function getDbName() {
        return $this->dbname;
    }

    /**
     * metodo set del nombre de la calse DB
     * @param type $value
     * @return type
     */
    public function setDbName($value) {
        return $this->dbname = $value;
    }

    /**
     * metodo get del host de la clase DB
     * @return type
     */
    public function getHost() {
        return $this->host;
    }

    /**
     * metodo set del host de la clase DB
     * @param type $value bombre del host
     */
    public function setHost($value) {
        $this->host = $value;
    }

    /**
     * metodo get del usuario de la clase DB
     * @return type
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * metodo set del usuario de la clase DB
     * @param type $value nombre de usuario
     */
    public function setUser($value) {
        $this->user = $value;
    }

    /**
     * metodo get del password de la clase DB
     * @return type
     */
    public function getPass() {
        return $this->pass;
    }

    /**
     * metodo set del password de la clase DB
     * @param type $value password para acceder a la base de datos
     */
    public function setPass($value) {
        $this->pass = $value;
    }

}
