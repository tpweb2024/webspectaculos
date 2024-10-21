
{include file="header.tpl"}
    <h2>Presentación del evento:</h2>
    <br>
    <h1>{$evento->nombre}</h1>
    <br>
    <ul>
        <li><h3>categoría: <a href="categoria/{$categoria->id}">{$categoria->nombre|default:"-"}</a></h3></li>
        <li><h3>fecha: {$evento->fecha}</h3></li>
        <li><h3>descripción:</h3>
            <ul><li>{$evento->descripcion}</li></ul>
        </li>
    </ul><br>
    {include file="go_home.tpl"}
{include file="footer.tpl"}
