<h2>categorías</h2>
<br>
<ul>
    {foreach $arrCategorias as $categoria}
        <li><a href="categoria/{$categoria->id}">{$categoria->nombre}</a></li>
    {/foreach}
</ul>

