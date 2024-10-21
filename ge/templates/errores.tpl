{if (count( $arrErrores|default:[] ) > 0 )}
    <h2>errores</h2>
    <ul>
        {foreach $arrErrores as $error}
        <li>{$error}</li>
        {/foreach}
    </ul>   
{/if }
