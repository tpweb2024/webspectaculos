<?php

Class EventModel {

    private $db;

    public function __construct() {
       $this->db = new PDO('mysql:host=localhost;dbname=g27_db_webspectaculos;charset=utf8', 'root', '');
   }

    public function getAll(){
        $query = $this->db->prepare('SELECT * FROM evento');
        $query->execute();
        $events = $query->fetchAll(PDO::FETCH_OBJ);  
        return $events;
    }

    public function getAllTipo(){
        $query = $this->db->prepare('SELECT * FROM tipoevento');
        $query->execute();
        $tipoevents = $query->fetchAll(PDO::FETCH_OBJ);  //arreglo de tareas
        return $tipoevents;
    }       

    function get($id){
        $query = $this->db->prepare('SELECT * FROM evento WHERE id = ?');
        $query->execute([$id]);
        $event = $query->fetch(PDO::FETCH_OBJ);
        return $event; 
    }

    function insert($nombre, $descripcion, $fecha, $tipo){
             $query = $this->db->prepare('INSERT INTO evento (nombre, descripcion, fecha, tipo) VALUES(?,?,?,?)');
             $query->execute([$nombre, $descripcion, $fecha, $tipo]);
             return $this->db->lastInsertID();
         }    

    function insertupdate($id, $nombre, $descripcion, $fecha, $tipo){
            $query = $this->db->prepare('UPDATE evento SET nombre=?, descripcion=?, fecha=?, tipo=? WHERE id = ?');
            $query->execute([$nombre, $descripcion, $fecha, $tipo, $id]);
       }

    function remove($id){
        $query = $this->db->prepare ('DELETE FROM evento WHERE id = ?');
        $query->execute([$id]);
    }       
}