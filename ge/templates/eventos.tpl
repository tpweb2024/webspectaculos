
<h2>eventos</h2>
<br>
<ul>
    {foreach $arrEventos as $evento}
        <li><a href="evento/{$evento->id}">{$evento->nombre}</a></li>
    {/foreach}
</ul>

