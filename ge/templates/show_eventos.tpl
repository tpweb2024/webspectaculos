{include file="header1.tpl"}
<h3 align='center'>Modificacion y Eliminacion de Eventos</h3>;
   <div class='container-xxl py-5'>
     <div class='container'>
       <div class='row g-4'>
            <ul class='list-group mt-5'>
                {foreach $events as $event}
                    <li class='list-group-item'>
                     <a href="modificar/{$event->id}">MODIFICAR  |</a><a href="eliminar/{$event->id}">ELIMINAR  |</a>
                    {$event->nombre}
                    </li>
                {/foreach}
            </ul>;
        </div>;
     </div>;
  </div>;
{include file="footer1.tpl"}