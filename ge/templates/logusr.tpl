
{include file="header.tpl"}

    <h2>login</h2>
    <form action="login" method="post" autocomplete="off">
        nombre <input type="text" name="user" autocomplete="off"><br><br>
        clave <input type="password" name="password" autocomplete="off"><br><br>
        <input type="submit" value=" ingresar ">
    </form>
    {include file="go_home.tpl"}

{include file="footer.tpl"}