<?php

Class EventView {
    public $user = null;

    public function __construct($user){
        $this->user = $user;
    }

    function Home() {
        require_once 'templates/home.phtml';   
        }

    function showEvents($events) {
        require_once 'templates/show_events.phtml';   
        }

    function ShowAlta($events, $tipos) {
        require_once 'templates/form_alta.phtml'; 
        }

    function showEventsUpdate($events) {
        require_once 'templates/show_events_edit.phtml';   
        }

    function updateViewEvent($event,$tipos) {       
        require_once 'templates/show_event.phtml';              
        }

}