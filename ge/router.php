<?php

    include "app_routes.php";
    include "config/router_config.php";

    $router = new Router();
    $router->exec();

?>