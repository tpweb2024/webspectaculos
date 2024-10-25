<?php

include_once 'app/models/ge_modelo.php';

require_once "./smarty/libs/Smarty.class.php";
use Smarty\Smarty;

Class EventView {

    function __construct(){
        $this->view = new Smarty();
    }
    
    public function listarEventos( $arrEventos, $arrErrors){
        $this->view->assign('arrEventos', $arrEventos);
        $this->view->assign('arrErrores', $arrErrors);
        $this->view->display('listar_eventos.tpl');    
    }

    function showEvent($events) {
        include 'templates/header.php';
        include 'templates/form_alta.php';
        echo "<h3 align='center'>Eliminacion de Eventos</h3>";
        echo "<div class='container-xxl py-5'>";
        echo "<div class='container'>";
        echo "<div class='row g-4'>";
        
        echo "<ul class='list-group mt-5'>";
        foreach($events as $event) {
            echo "<li class='list-group-item'>
            <a href='eliminar/$event->id'>ELIMINAR </a><a href='modificar/$event->id'> | MODIFICAR |</a>
            $event->nombre
           </li>";
           }
        echo "</ul>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<title>Lista de Tipos de Eventos</title>";

      include 'templates/form_altatipo.php';


        }

    function showError($msg){
        echo "<h1>ERROR!</h1>";
        echo "<h2> $msg </h2>";
        
    }
}
