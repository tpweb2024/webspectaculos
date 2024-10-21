<?php

Class EventView {

    function showEvent($events) {
        include 'templates/header.php';
        include 'templates/form_alta.php';

        
        echo "<ul class='list-group mt-5' style='background-color:#antiquewhite'>";
        foreach($events as $event) {
            echo "<li class='list-group-item'>
            $event->nombre | $event->descripcion | $event->fecha |$event->tipo
            <a href='eliminar/$event->id' class='btn btn-danger btn-sm'>ELIMINAR</a>
           </li>";
           }
        echo "</ul>";

      include 'templates/footer.php';
        }

    function showError($msg){
        echo "<h1>ERROR!</h1>";
        echo "<h2> $msg </h2>";
        
    }
}