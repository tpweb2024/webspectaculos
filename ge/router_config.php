<?php


class RouterConfig {
    // parámetro asignado en .htaccess conteniendo la acción y los parámetros de la URL
    public static $ACTION = "action";
    public static $PARAMS = "params";
}

class Router {

    public function exec(){
        //Parsear la URL para identificar Actions y Parametros. 
        $urlData = $this->parseUrl($_GET[RouterConfig::$ACTION]);

        // Nombre de la Acción a ejecutar
        $actionName = $urlData[RouterConfig::$ACTION];
        
        $methodName = AppRoutes::$ACTIONS[AppRoutes::$DEFAULT];
        
        if (array_key_exists($actionName, AppRoutes::$ACTIONS))
            if ( function_exists(AppRoutes::$ACTIONS[$actionName]))
                $methodName = AppRoutes::$ACTIONS[$actionName];
    
        $params = $urlData[RouterConfig::$PARAMS];
        $methodName($params);
    }

    private function parseUrl($url) {
        // Separa la URL en un array usando "/" como delimitador
        $arrData = explode("/", $url);
        // Guarda el nombre de la acción (primer elemento del array)
        $arrayReturn[RouterConfig::$ACTION] = $arrData[0];
        // Guarda la lista de parámetros como un array (elementos desde el segundo en adelante)
        $arrayReturn[RouterConfig::$PARAMS] = isset($arrData[1]) ? array_slice($arrData, 1) : null;
        // Devuelve el array con los resultados 
        return $arrayReturn;
    }
}

?>