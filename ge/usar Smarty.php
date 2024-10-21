
<?php

    require("./smarty/libs/Smarty.class.php");
    use Smarty\Smarty;
    
    $smarty = new Smarty();

    $smarty->setTemplateDir('./plSmarty/template');
    $smarty->setConfigDir('./plSmarty/config');
    $smarty->setCompileDir('./plSmarty/compile');
    $smarty->setCacheDir('./plSmarty//cache');
    $smarty->testInstall();

    //-------- ejemplo de uso 

    $smarty->assign('firstname', 'Doug');
    $smarty->assign('lastname', 'Evans');
    $smarty->assign('meetingPlace', 'New York');
    $smarty->display('index.tpl');    
    
        /// ...y el index.tpl escapeshellarg
    
    Hello {$firstname} {$lastname}, glad to see you can make it. <br />
    This weeks meeting is in {$meetingPlace}.



    // {* comentarios   ------------
          multilineas ------------
      *}


    // ------------  include   -------------------------------------
    
    { include file = "archivo.tpl" }
    { include file = "header.tpl" attrib_name = "attrib value" }    
    { include file = #includeFile# title = "Smarty is cool" }
    { include file = #archivo# }
    { include file = $includeFile }
    
    
    Las variables pasadas sobreescriben a las indicadas del template actual
    
         {include file="header.tpl" title="Main Menu" table_bgcolor="#c0c0c0"}
         {* el cuerpo del template va aqui *}
         {include file="footer.tpl" logo="http://my.example.com/logo.gif"}
    
    
    // ------------------- include dinamico ---------

     <html>
         <head>
         <title>{$title}</title>
         </head>
         <body>
             {include file="page_header.tpl"}  
             {* el cuerpo del template va aqui *}
             {include file="/$tpl_name.tpl"} <------ will replace $tpl_name with value
             {include file="page_footer.tpl"}
         </body>
     </html>


    //   ---------------  fetch --------------------------

    {* include some javascript in your template *}
    {fetch file="/export/httpd/www.example.com/docs/navbar.js"}
    
    {* embed some weather text in your template from another web site *}
    {fetch file="http://www.myweather.com/68502/"}
    
    {* fetch a news headline file via ftp *}
    {fetch file="ftp://user:password@ftp.example.com/path/to/currentheadlines.txt"}
    
    {* assign the fetched contents to a template variable *}
    {fetch file="http://www.myweather.com/68502/" assign="weather"}
    {if $weather ne ""}
      <b>{$weather}</b>
    {/if}


    // ---------- mostrar variables -----------------------------

    {$foo}        <-- displaying a simple variable (non array/object)
    {$foo[4]}     <-- display the 5th element of a zero-indexed array
    {$foo.bar}    <-- display the "bar" key value of an array, similar to PHP $foo['bar']
    {$foo.$bar}   <-- display variable key value of an array, similar to PHP $foo[$bar]
    {$foo->bar}   <-- display the object property "bar"
    {$foo->bar()} <-- display the return value of object method "bar"
    {#foo#}       <-- display the config file variable "foo"
    {$smarty.config.foo} <-- synonym for {#foo#}
    {$foo[bar]}   <-- syntax only valid in a section loop, see {section}
    {assign var=foo value="baa"}{$foo} <--  displays "baa", see {assign}
    
          // ----------    otras combinaciones -----------
    
    {$foo.bar.baz}
    {$foo.$bar.$baz}
    {$foo[4].baz}
    {$foo[4].$baz}
    {$foo.bar.baz[4]}
    {$foo->bar($baz,2,$bar)} <-- passing parameters
    {"foo"}       <-- static values are allowed
    
          // ------ entre comillas -----------------
    
    {func var="test `$foo.bar` test"} <-- sees $foo.bar


    // ---------------- valores boleanos ----------------------------
    //     sin comillas true, on, y yes, o false, off, y no.
    
    {html_select_date display_days=yes}


    //  --------------------------------- if -------------------------

    {if $name eq "Fred"}
    	Welcome Sir.
    {elseif $name eq "Wilma"}
    	Welcome Ma'am.
    {else}
    	Welcome, whatever you are.
    {/if}


    // -------  iterar ver section ---------------------
    //

    // ------- para que no interprete un bloque -----------------
    //
    //   {literal} ... .html,   .js  lo que sea ...  {/literal}
    //

