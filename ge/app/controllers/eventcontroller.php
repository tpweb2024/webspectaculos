<?php
include_once 'app/models/eventmodel.php';
include_once 'app/views/eventview.php';

class EventController {

    private $model;
    private $view;

    function __construct($res){
      $this->model = new EventModel();
      $this->view = new EventView($res->user);
  }    

 //   function __construct(){
 //       $this->model = new EventModel();
 //       $this->view = new EventView();
 //   }

// -----INICIO
function Home(){
  $this->view->Home();              
}

// -----MUESTRA LOS EVENTOS
    function showEvents(){
      $events = $this->model->getAll();
      $this->view->showEvents($events);              
    }
// -----GENERA FORMULARIO PARA DAR EL ALTA
    function ShowAltaEvent(){
        $events = $this->model->getAll();
        $tipos = $this->model->getAllTipo();
        $this->view->showAlta($events, $tipos);              
      }
// -----REALIZA EL ALTA
    function addEvent(){
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $fecha = $_POST['fecha'];
        $tipo = $_POST['tipo'];          
        if (empty($nombre) || empty($descripcion)){
            $this->view->showError('Faltan datos obligatorios');
             die();
           } 
        $id = $this->model->insert($nombre, $descripcion, $fecha, $tipo);
        header("Location: " . BASE_URL);
     }  
// -----MUESTRA LOS EVENTOS A EDITAR Y ELIMINAR  
    function showEvents1(){
      $events = $this->model->getAll();
      $this->view->showEventsUpdate($events);            
  }
// -----MUESTRA EL EVENTO HA MODIFICAR EVENTOS
    function editEvent($id){
        $event = $this->model->get($id);
        $tipos = $this->model->getAllTipo();        
        $this->view->updateViewEvent($event,$tipos);
    }
// -----REALIZA LA ACTUALIZACION DEL EVENTO
    function updateEvent($id){
      $nombre = $_POST['nombre'];
      $descripcion = $_POST['descripcion'];
      $fecha = $_POST['fecha'];
      $tipo = $_POST['tipo'];  
      if (empty($nombre) || empty($descripcion)){
        $this->view->showError('Faltan datos obligatorios');
        die();
        }
      $id = $this->model->insertupdate($id, $nombre, $descripcion, $fecha, $tipo);
      header("Location: " . BASE_URL);
     }
// -----ELIMINA EL EVENTO     
    function deleteEvent($id){
      $this->model->remove($id);
      header('Location: ' . BASE_URL);
      }
        
}