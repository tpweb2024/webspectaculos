<?php
include_once 'app/models/tipoeventmodel.php';
include_once 'app/views/tipoeventview.php';

class TipoEventController {

  private $model;
  private $view;

  function _construct(){
      $this->model = new TipoEventModel();
      $this->view = new TipoEventView();
  }

  /**
   * *Imprime la lista de tareas
   */

  function showTipoEvent(){

     // obtiene las tareas del modelo
      $this->_construct();
      $event = $this->model->getTipoEvent();
      
     // actualizo la vista
      $this->view->showTipoEvent($event);              
  }

  function addTipoEvent(){

      //TODO: validacion de datos
      $this->_construct();
      //obtengo los datos del usuario
        $nombre = $_POST['nombre'];
        $id = $_POST['id'];

      // veridico campos obligatorio
      if (empty($nombre) || empty($id)){
        $this->view->showTipoError('Faltan datos obligatorios');
        die();
      }
      //inserto la atrea en la DB
        $id = $this->model->insertTipoEvent($nombre, $id);
    
        //redirijimos al listado
        header("Location: " . BASE_URL);
      }

  function deleteTipoEvent($id){
      $this->_construct();
      $this->model->removeTipoEvent($id);
      header('Location: ' . BASE_URL);
      }
    
}