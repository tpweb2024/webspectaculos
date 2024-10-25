<?php

Class TipoEventView {

    function showTipoEvent($tipoevents) {
        include 'templates/form_altatipo.php';

        
        echo "<h3 align='center'>Eliminacion de Tipo de Eventos</h3>";
        echo "<div class='container-xxl py-5'>";
        echo "<div class='container'>";
        echo "<div class='row g-4'>";
        
        echo "<ul class='list-group mt-5'>";
        foreach($tipoevents as $tipoevent) {
            echo "<li class='list-group-item'>
            $tipoevent->nombre | $tipoevent->id
            <a href='eliminar/$tipoevent->id' class='btn btn-danger btn-sm'>ELIMINAR</a>
           </li>";
           }
        echo "</ul>";
        echo "</div>";
        echo "</div>";
        echo "</div>";


        }

    function showTipoError($msg){
        echo "<h1>ERROR!</h1>";
        echo "<h2> $msg </h2>";
        
    }
}