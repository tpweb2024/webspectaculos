<?php
include_once 'app/modelo/ge_modelo.php';
include_once 'app/control/ge_control.php';

require_once "./smarty/libs/Smarty.class.php";
use Smarty\Smarty;

class AppView {

private $view;

function __construct(){
    $this->view = new Smarty();
}

public function listarEventos( $arrEventos, $arrErrors){
    $this->view->assign('arrEventos', $arrEventos);
    $this->view->assign('arrErrores', $arrErrors);
    $this->view->display('listar_eventos.tpl');    
}

public function listarCategorias( $arrCategorias, $arrErrors){
    $this->view->assign('arrCategorias', $arrCategorias);
    $this->view->assign('arrErrores', $arrErrors);
    $this->view->display('listar_categorias.tpl');    
}

public function logUsr(){
    $this->view->display('logusr.tpl');  
}

public function homePublic(){
    $this->view->display('home_public.tpl');  
}

public function homeAdmin(){
    $this->view->assign('admin', $_SESSION['user']);
    $this->view->display('home_admin.tpl');  
}

public function mostrarEvento($evento, $categoria){
    $this->view->assign('evento', $evento);
    $this->view->assign('categoria', $categoria);
    $this->view->display('mostrar_evento.tpl');  
}

public function mostrarCategoria($categoria, $arrEventos, $arrErrors){
    $this->view->assign('categoria', $categoria);
    $this->view->assign('arrEventos', $arrEventos);
    $this->view->assign('arrErrores', $arrErrors);
    $this->view->display('mostrar_categoria.tpl');  
}

}