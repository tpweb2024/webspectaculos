<?php
include_once 'app/models/tipoeventmodel.php';
include_once 'app/views/tipoeventview.php';

class TipoEventController {

    private $model;
    private $view;

    function __construct($res){
        $this->model = new TipoEventModel();
        $this->view = new TipoEventView($res->user);
    }
// -----MUESTRA LOS EVENTOS
    function showTipoEvents(){
      $events = $this->model->getAll();
      $this->view->showTipoEvents($events);              
    }
// -----GENERA FORMLARIO PARA DAR EL ALTA
    function ShowAltaTipoEvent(){
        $tipoevents = $this->model->getAll();
        $this->view->showTipoAlta($tipoevents);              
      }
// -----REALIZA EL ALTA
    function addTipoEvent(){
        $nombre = $_POST['nombre']; 
        if (empty($nombre)){
            $this->view->showError('Faltan datos obligatorios');
             die();
           } 
        $id = $this->model->insert($nombre);
        header("Location: " . BASE_URL);
     }  
// -----MUESTRA LOS EVENTOS A EDITAR Y ELIMINAR  
    function showTipoEvents1(){
      $tipoevents = $this->model->getAll();
      $this->view->showTipoEventsUpdate($tipoevents);            
  }
// -----MUESTRA EL EVENTO HA MODIFICAR EVENTOS
    function editTipoEvent($id){
        $tipoevent = $this->model->get($id);      
        $this->view->updateViewTipoEvent($tipoevent);
    }
// -----REALIZA LA ACTUALIZACION DEL EVENTO
    function updateTipoEvent($id){
      $nombre = $_POST['nombre'];
      if (empty($nombre)){
        $this->view->showError('Faltan datos obligatorios');
        die();
        }
      $id = $this->model->insertupdate($id, $nombre);
      header("Location: " . BASE_URL);
     }
// -----ELIMINA EL EVENTO     
    function deleteTipoEvent($id){
      $this->model->remove($id);
      header('Location: ' . BASE_URL);
      }
         

}



