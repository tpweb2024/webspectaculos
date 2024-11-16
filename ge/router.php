<?php
  require_once 'libs/response.php';
  require_once 'app/middlewares/session_auth_middleware.php';
  include_once 'app/controllers/eventcontroller.php';
  include_once 'app/controllers/tipoeventcontroller.php';
  include_once 'app/controllers/authcontroller.php';
  
  define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//listar   ->  showTask()
//agregar  ->  addTasks()
//eliminar  ->  removeTask()
$res = new Response(); 

$action='home';

if (!empty($_GET["action"])){
	$action=$_GET["action"];}

//parsea la accion para sepaerar accion real de parametros

$params=explode("/",$action);

    switch ($params[0]){
//---------------------------EVENTOS------------------------			
		case 'home':
			sessionAuthMiddleware($res);
			$controller = new EventController($res);
			$controller->Home();
	//		Home();
			break;	 
	    case 'listarevento':
			sessionAuthMiddleware($res); //Verifica que el usuario esté logueado y setea $res->user o redirige a Login
			$controller = new EventController($res);
			$controller->showEvents();
			break;	 
		case 'altaevento':
			sessionAuthMiddleware($res);
			$controller = new EventController($res);
			$controller->ShowAltaEvent();
			break;				
		case 'agregar':
			sessionAuthMiddleware($res);
			$controller = new EventController($res);
			$controller->addEvent();
			addEvent();
			break;			
//muestra eventos a modificar
		case 'modificaevento':
			sessionAuthMiddleware($res);
			$controller = new EventController($res);
			$controller->showEvents1();
			break;					
//muestra el evento ha modificar					
		case 'editar':
			sessionAuthMiddleware($res);
			$controller = new EventController($res);
			$controller->editEvent($params[1]);
			break;	
//actualiza el evento modificado								
		case 'save':
			$controller = new EventController($res);	
			$controller->updateEvent($params[1]);
			break;
//elimina el evento 				
		case 'eliminar':
			sessionAuthMiddleware($res);
			$controller = new EventController();
			$controller->deleteEvent($params[1]);	
			break;		
//---------------------------TIPOS DE EVENTOS------------------------			
		case 'listartipoevento':
			sessionAuthMiddleware($res);
			$controller = new TipoEventController($res);
			$controller->showTipoEvents();;
			break;	 
		case 'altatipoevento':
			sessionAuthMiddleware($res);
			$controller = new TipoEventController($res);
			$controller->ShowAltaTipoEvent();
			break;				
		case 'agregartipoevento':
			sessionAuthMiddleware($res);
			$controller = new TipoEventController($res);
			$controller->addTipoEvent();
			addTipoEvent();
			break;	
//muestra eventos a modificar					
		case 'modificatipo':
			sessionAuthMiddleware($res);
			$controller = new TipoEventController($res);
			$controller->showTipoEvents1();
			break;			
//muestra el evento ha modificar					
		case 'editartipo':
			sessionAuthMiddleware($res);
			$controller = new TipoEventController($res);	
			$controller->editTipoEvent($params[1]);
			break;
//actualiza el evento modificado								
		case 'savetipoevent':
			sessionAuthMiddleware($res);
			$controller = new TipoEventController($res);	
			$controller->updateTipoEvent($params[1]);
			break;			
		case 'eliminartipo':
			sessionAuthMiddleware($res);
			$controller = new TipoEventController($res);
			$controller->deleteTipoEvent($params[1]);	
			break;					
//---------------------------LOGUIN------------------------			
		case 'showLogin':
			$controller = new AuthController();
			$controller->showLogin();
			break;				
		case 'login':
			$controller = new AuthController();
			$controller->login();
			break;	
		case 'logout':
			$controller = new AuthController();
			$controller->logout();
			break;				
	    default:
		header("HTTP/1.0 404 Not Found");
		echo "404 Page not found";
		break;
}
