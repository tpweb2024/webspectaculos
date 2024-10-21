<?php
include_once 'app/control/ge_control.php';
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
    ];
}



?>