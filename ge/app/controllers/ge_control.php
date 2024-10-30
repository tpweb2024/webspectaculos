<?php
include_once 'app/models/ge_modelo.php';
include_once 'app/views/ge_vista.php';
include_once 'app/views/eventview.php';
include_once 'app/controllers/eventcontroller.php';
include_once 'app/controllers/tipoeventcontroller.php';
include_once 'routerabm.php';



class Controller {

protected $model;
protected $view;
protected $errors = [];

function __construct(){
    //session_start();
    try {
        $this->model = new AppModel();
    } catch  (Exception $e) {
        array_push( $this->errors, $e->getMessage() );
    }
    $this->view = new AppView();
}
}



class AppController extends Controller {

const _defaultUSER = '1'; //admin';
const _defaultPASSWORD = '1'; //webadmin';¡

/*
session_start(): Inicia una sesión o reanuda una sesión existente.
session_destroy(): Destruye una sesión.
session_unset(): Elimina todas las variables de sesión.
$_SESSION: Un array asociativo que contiene todas las variables de sesión.
*/

function __constructor(){
    parent::__construct();
}

public function appDeploy(){
    AppModel::dbDeploy();
}


public function listarEventos(){
    $listaEventos = null;
    if ( isset( $this->model ) ){
        try {
            $listaEventos = $this->model->getEventos();
        } catch  (Exception $e) {
            array_push( $this-$errors, $e->getMessage() );
        }
    }
    $this->view->listarEventos( $listaEventos, $this->errors );
}

public function listarCategorias(){
    $listaCategorias = null;
    if ( isset( $this->model ) ){
        try {
            $listaCategorias = $this->model->getCategorias();
        } catch  (Exception $e) {
            array_push( $this->errors, $e->getMessage() );
        }
    }
    $this->view->listarCategorias( $listaCategorias, $this->errors );
}

public function login(){
    if (isset($_POST['user']) && isset($_POST['password'])){
        if ( ($_POST['user'] == AppController::_defaultUSER) && 
             ($_POST['password'] == AppController::_defaultPASSWORD) ){
            $_SESSION['user'] = ($_POST['user']);
            $this->home();
        }
    }
}

public function logout(){
    if ( isset($_SESSION['user']) ){
        session_unset();
        session_destroy();
    }
    $this->home();
}

public function home(){
    if ( isset($_SESSION['user']) )
        $this->view->homeAdmin();
    else
        $this->view->homePublic();
}

public function logUsr(){
    $this->view->logUsr();    
}


public function mostrarCategoria($idCategoria){
    $categoria = null;
    $arrEventos = null;
    if ( isset( $this->model ) ){
        try{
            $categoria = $this->model->getCategoria($idCategoria);
            if ( isset( $categoria )){
                $arrEventos = $this->model->getEventosByCategoria( $idCategoria );
            }
        } catch ( Exception $e ){
            array_push( $this-$errors, $e->getMessage() );
        }
    }
    //print_r($arrEventos);
    $this->view->mostrarCategoria( $categoria, $arrEventos, $this->errors);
}





public function mostrarEvento($id){
    $evento = null;
    $categoria = null;
    if ( isset( $this->model ) ){
        try {
            $evento = $this->model->getEvento($id);
            $categoria = $this->model->getCategoria($evento->tipo);
        } catch  (Exception $e) {
            array_push( $this-$errors, $e->getMessage() );
        }
    }
    $this->view->mostrarEvento( $evento, $categoria, $this->errors );
}

}

//------------------

function logUsr(){
    $appController = new AppController();
    $appController->logUsr();
}

function login(){
    $appController = new AppController();
    $appController->login();
}

function logout(){
    $appController = new AppController();
    $appController->logout();
}

function home(){
    $appController = new AppController();
    $appController->home();
}

function listarEventos(){
    $appController = new AppController();
    $appController->listarEventos();
}

function mostrarEvento($params){
    $appController = new AppController();
    $appController->mostrarEvento($params[0]);
}

function mostrarCategoria($params){
    $appController = new AppController();
    $appController->mostrarCategoria($params[0]);
}

function listarCategorias(){
    $appController = new AppController();
    $appController->listarCategorias();
}
 
function dbDeploy(){
    $appController = new AppController();
    $appController->appDeploy();
}

function crud(){
    $appcontroller = new EventController();
    $appcontroller->showEvent(); 
}

//-----------------ABM

//function agregar(){
//    $appcontroller = new EventController();
 //   $appcontroller->addEvent(); 
  //  addEvent();
//}

//function actualizar(){
  //  $appcontroller = new EventController();
    //$appcontroller->saveEvent($params[1]); 
   // saveEvent($params[1]);
//}

function modificar($id){
   $appcontroller = new EventController();
  $appcontroller->updateEvent()($id); 
 updateEvent($id);
}

//function eliminar($id){
 //   echo 'llego hasta aca';
  //  $appcontroller = new EventController();
   // $appcontroller->deleteEvent($id);
  //  deleteEvent($id);
//}

//function listartipo(){
//    $appcontroller = new TipoEventController();
 //   $appcontroller->listartipo(); 
//}

//function agregartipo(){
 //   $appcontroller = new TipoEventController();
  //  $appcontroller->addTipoEvent();
   // addTipoEvent();
//}

//function eliminartipo(){
 //   $appcontroller = new TipoEventController();
  //  $appcontroller->deleteTipoEvent($params[0]); 
//}