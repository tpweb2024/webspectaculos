<?php
    include_once 'app/controllers/eventcontroller.php';
    include_once 'app/controllers/ge_control.php';
    include_once 'app/controllers/tipoeventcontroller.php';

// app_routes ----------------------

//include "config/router_config.php";
// include "app_actions.php";

class AppRoutes {
    public static $DEFAULT = "home";
    public static $ACTIONS = [
        'categoria' => "mostrarCategoria",
        'categorias' => "listarCategorias",
        'crud' => "crud",
        'dbdeploy' => "dbDeploy",
        'evento' => "mostrarEvento",
        'eventos' => "listarEventos",
        'home' => "home",
        'login' => "login",
        'logout' => "logout",
        'logusr' => "logUsr",
        'listar' => "listar",
        'agregar' => "agregar",
        'actualizar' => 'actualizar',
        'modificar' => 'modificar', 
        'eliminar' => "eliminar",
        'listartipo' => "listartipo",
        'agregartipo' => "agregartipo",
        'eliminartipo' => "eliminartipo",
    ];
}



?>