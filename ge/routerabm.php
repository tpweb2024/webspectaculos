<?php
  include_once 'app/controllers/eventcontroller.php';
  include_once 'app/controllers/tipoeventcontroller.php';
  
//define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//listar   ->  showEvento()
//agregar  ->  addEvento()
//eliminar  ->  removeEvento()

$action='listar';

if (!empty($_GET["action"])){
	$action=$_GET["action"];}

//parsea la accion para sepaerar accion real de parametros

$params=explode("/",$action);

    switch ($params[0]){
		case 'listar':
			$controller = new EventController();
			$controller->showEvent(); 
			break;	 
		case 'agregar':
			$controller = new EventController();
			$controller->addEvent();
			addEvent();
			break;
		case 'eliminar':
			$controller = new EventController();
			$controller->UpdateEvent($params[1]);
			break;	
		case 'eliminar':
			$controller = new EventController();
			$controller->deleteEvent($params[1]);
			break;
		case 'listartipo':
			$controller = new TipoEventController();
			$controller->showTipoEvent(); 
			showTipoEvent();
			break;	 
		case 'agregartipo':
			$controller = new TipoEventController();
			$controller->addTipoEvent();
			addTipoEvent();
			break;
		case 'eliminartipo':
			$controller = new TipoEventController();
			$controller->deleteTipoEvent($params[1]);	
			break;
//	    default:
//		echo "404 Page not found";
//		break;
}
