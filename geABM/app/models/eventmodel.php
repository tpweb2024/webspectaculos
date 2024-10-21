<?php

Class EventModel {

    //abre la conexion a la base de datos    

    private function connect(){
        $db = new PDO('mysql:host=localhost;dbname=g27_db_webspectaculos;charset=utf8', 'root', '');
        return $db;
    }

    //devuelve todas las tareas de la base de datos

    public function getEvent(){

        // 1.- abro la conexion
        $db = $this->connect();

        // 2.- Enviar la consulta ( 2 sub pasos: prepare y ejecute)

        $query = $db->prepare('SELECT * FROM evento');
        $query->execute();

        // 3.- Obtengo la respuesta con un fetchAll (porque son muchos)

        $events = $query->fetchAll(PDO::FETCH_OBJ);  //arreglo de tareas
        return $events;
    }

        /**
        * Inserta la tarea en la base de datos
        */
    function insertEvent($nombre, $descripcion, $fecha, $tipo){
     // 1.- abro la conexion
        $db = $this->connect();
     // 2.- enviar la consulta (sub pasos, prepara y ejecuta)
        $query = $db->prepare('INSERT INTO evento (nombre, descripcion, fecha, tipo) VALUES(?,?,?,?)');
        $query->execute([$nombre, $descripcion, $fecha, $tipo]);
     // 3.- Obtengo y devuelvo el ID de la tarea nueva
        return $db->lastInsertID();

    }

    function updateTask($id){
        $db = getConection();
        $query = $db->prepare ('UPDATE tareas SET finalizada = 1 WHERE id = ?');
        $query->execute([$id]);
    }

    function removeEvent($id){
        $db = $this->connect();
        $query = $db->prepare ('DELETE FROM evento WHERE id = ?');
        $query->execute([$id]);
    }
    
}