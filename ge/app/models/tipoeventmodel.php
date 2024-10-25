<?php

Class TipoEventModel {

    //abre la conexion a la base de datos    

    private function connect(){
        $db = new PDO('mysql:host=localhost;dbname=g27_db_webspectaculos;charset=utf8', 'root', '');
        return $db;
    }

    //devuelve todas las tareas de la base de datos

    public function getTipoEvent(){

        // 1.- abro la conexion
        $db = $this->connect();

        // 2.- Enviar la consulta ( 2 sub pasos: prepare y ejecute)

        $query = $db->prepare('SELECT * FROM tipoevento');
        $query->execute();

        // 3.- Obtengo la respuesta con un fetchAll (porque son muchos)

        $tipoevents = $query->fetchAll(PDO::FETCH_OBJ);  //arreglo de tareas
        return $tipoevents;
    }

        /**
        * Inserta la tarea en la base de datos
        */
    function insertTipoEvent($id, $nombre){
     // 1.- abro la conexion
        $db = $this->connect();
     // 2.- enviar la consulta (sub pasos, prepara y ejecuta)
        $query = $db->prepare('INSERT INTO tipoevento (nombre, id) VALUES(?,?)');
        $query->execute([$id, $nombre]);
     // 3.- Obtengo y devuelvo el ID de la tarea nueva
        return $db->lastInsertID();

    }

    function removeTipoEvent($id){
        $db = $this->connect();
        $query = $db->prepare ('DELETE FROM tipoevento WHERE id = ?');
        $query->execute([$id]);
    }
    
}