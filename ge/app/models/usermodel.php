<?php

Class UserModel {

    private $db;

    public function __construct() {
         // 1.- abro la conexion
        $this->db = new PDO('mysql:host=localhost;dbname=g27_db_webspectaculos;charset=utf8', 'root', '');
    }

    //devuelve todas las tareas de la base de datos

    public function getUserbyEmail($email){

        $query = $this->db->prepare('SELECT * FROM usuario WHERE email = ?');
        $query->execute([$email]);

        $user = $query->fetch(PDO::FETCH_OBJ);  //arreglo de tareas
        return $user;
    }

        /**
        * Inserta la tarea en la base de datos
        */
    function insertTask($title, $description, $priority){
     // 1.- abro la conexion
        $db = $this->connect();
     // 2.- enviar la consulta (sub pasos, prepara y ejecuta)
        $query = $db->prepare('INSERT INTO tareas (titulo, descripcion, prioridad) VALUES(?,?,?)');
        $query->execute([$title, $description, $priority]);
     // 3.- Obtengo y devuelvo el ID de la tarea nueva
        return $db->lastInsertID();


    }

    /**
* Elimina la tarea en la base de datos
*/
function removeTask($id){
	$db = $this->connect();

	$query = $db->prepare ('DELETE FROM tareas WHERE id = ?');
	$query->execute([$id]);
}
}