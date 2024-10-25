<?php

    include "app_routes.php";
    include "config/router_config.php";
    include_once 'app/controllers/eventcontroller.php';

    $router = new Router();
    $router->exec();

?>