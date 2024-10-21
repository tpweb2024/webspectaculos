<?php
include "config/db_config.php";
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
//En el head:   <base href="{BASE_URL}">

class Model {

protected $dbConnection;
protected $errors = [];

function __construct(){
    try{
        $this->dbConnection = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DBNAME.';charset=utf8', MYSQL_USER, MYSQL_PASS);
    } catch ( Exception $e ){
        array_push($this->errors, $e->getMessage());
    }
}

protected function execSQL( $query, $arrParams ){
    $queryResult = null;
    try {
        $sentencia = $this->dbConnection->prepare( $query );
        $sentencia->execute($arrParams);
        $queryResult = $sentencia->fetchAll(PDO::FETCH_OBJ);
    } catch ( Exception $e ) {
        array_push($this->errors, $e->getMessage());
    }
    return $queryResult;
}
}

class AppModel extends Model {

function __construct(){
    parent::__construct();
}

public function errors(){
    return $this->errors;
}

public static function dbDeploy(){
    $conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS);
    if ($conn) {
        $sql = "CREATE DATABASE IF NOT EXISTS ".MYSQL_DBNAME;
        if (!$conn->query($sql))
            array_push($this->errors, $conn->connect_error);
    } else {
        array_push($this->errors, $conn->connect_error);
    }
}

public function getEventos(){
    $sentencia = $this->dbConnection->prepare( "select * from evento");
    $sentencia->execute();
    $arrEventos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $arrEventos;
}

public function getEvento($id){
    $sentencia = $this->dbConnection->prepare( "select * from evento where id=?");
    $sentencia->execute(array($id));
    $evento = $sentencia->fetch(PDO::FETCH_OBJ);
    return $evento;
}

public function getEventosByCategoria( $idCategoria ){
    $sentencia = $this->dbConnection->prepare( "select * from evento where tipo=?");
    $sentencia->execute(array($idCategoria));
    $arrEventos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $arrEventos;
}

public function getCategoria($id){
    $sentencia = $this->dbConnection->prepare( "select * from tipoevento where id=?");
    $sentencia->execute(array($id));
    $categoria = $sentencia->fetch(PDO::FETCH_OBJ);
    return $categoria;
}

public function getCategorias(){
    $sentencia = $this->dbConnection->prepare( "select * from tipoevento");
    $sentencia->execute();
    $arrCategorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $arrCategorias;
}
}