<?php

Class TipoEventView {
    public $user = null;

    public function __construct($user){
        $this->user = $user;
    }    

    function showTipoEvents($tipoevents) {
        require_once 'templates/show_tipo_events.phtml';   
        }

    function ShowTipoAlta($tipoevents) {
        require_once 'templates/form_tipo_alta.phtml'; 
        }

    function showTipoEventsUpdate($tipoevents) {
        require_once 'templates/show_tipo_events_edit.phtml';   
        }

    function updateViewTipoEvent($tipoevent) {       
        require_once 'templates/show_tipo_event.phtml';              
        }

}