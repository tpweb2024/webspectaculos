<?php

include_once 'app/models/ge_modelo.php';
include_once 'app/models/eventmodel.php';
include_once 'routerabm.php';

require_once "./smarty/libs/Smarty.class.php";
use Smarty\Smarty;

Class EventView {

private $view;

function __construct(){
        $this->view = new Smarty();
 }

public function altaEvent(){
    $this->view->display('home_admin.tpl');   
    $this->view->display('alta_evento.tpl');

}

    function showEvent($events) {
        $this->view->display('alta_evento.tpl');
        $this->view->assign('events', $events);
        $this->view->display('show_eventos.tpl');
        }

    function updateViewEvent($event) {
        $this->view->display('header1.tpl');     
         $this->view->assign('event', $event);
         $this->view->display('form_update.tpl');     
          }        

    function showError($msg){
        echo "<h1>ERROR!</h1>";
        echo "<h2> $msg </h2>";
        
    }
}
