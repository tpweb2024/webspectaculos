<?php
include_once 'app/models/eventmodel.php';
include_once 'app/views/eventview.php';

class EventController {

    private $modelABM;
    private $viewABM;

    function _construct(){
        $this->modelABM = new EventModel();
        $this->viewABM = new EventView();
    }

    /**
     * *Imprime la lista de tareas
     */

    function showEvent(){

       // obtiene las tareas del modelo
        $this->_construct();
        $event = $this->modelABM->getEvent();
        
       // actualizo la vista
        $this->viewABM->showEvent($event);              
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
        }
        //inserto la atrea en la DB
          $id = $this->modelABM->insertEvent($nombre, $descripcion, $fecha, $tipo);
      
          //redirijimos al listado
          header("Location: " . BASE_URL);
        }

    function updateEvent($id){

        $this->_construct();

        $event = $this->modelABM->getEvent();
        //obtengo los datos del usuario
          $nombre = $_POST['nombre'];
          $descripcion = $_POST['descripcion'];
          $fecha = $_POST['fecha'];
          $tipo = $_POST['tipo'];
      
        // veridico campos obligatorio
        if (empty($nombre) || empty($descripcion)){
          $this->view->showError('Faltan datos obligatorios');
        }
        //inserto la atrea en la DB
          $id = $this->modelABM->insertEvent($nombre, $descripcion, $fecha, $tipo);
      
          //redirijimos al listado
        header("Location: " . BASE_URL);
        }        

    function deleteEvent($id){
        $this->_construct();
        $this->model->removeEvent($id);
        header('Location: ' . BASE_URL);
        }
      
}

