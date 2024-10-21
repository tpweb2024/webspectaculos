<?php
include_once 'app/models/eventmodel.php';
include_once 'app/views/eventview.php';

class EventController {

    private $model;
    private $view;

    function _construct(){
        $this->model = new EventModel();
        $this->view = new EventView();
    }

    /**
     * *Imprime la lista de tareas
     */

    function showEvent(){

       // obtiene las tareas del modelo
        $this->_construct();
        $event = $this->model->getEvent();
        
       // actualizo la vista
        $this->view->showEvent($event);              
    }

    function addEvent(){

        //TODO: validacion de datos
        $this->_construct();
        //obtengo los datos del usuario
          $nombre = $_POST['nombre'];
          $descripcion = $_POST['descripcion'];
          $fecha = $_POST['fecha'];
          $tipo = $_POST['tipo'];
      
        // veridico campos obligatorio
        if (empty($nombre) || empty($descripcion)){
          $this->view->showError('Faltan datos obligatorios');
          die();
        }
        //inserto la atrea en la DB
          $id = $this->model->insertEvent($nombre, $descripcion, $fecha, $tipo);
      
          //redirijimos al listado
          header("Location: " . BASE_URL);
        }

    function finishTask($id){
          updateTask($id);
          header('Location: ' , BASE_URL);
      }

    function deleteEvent($id){
        $this->model->removeEvent($id);
        header('Location: ' . BASE_URL);
        var_dump($id);
        }
      
}
