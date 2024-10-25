<?php
/* Smarty version 5.4.0, created on 2024-10-23 01:45:14
  from 'file:logusr.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_6718390a5f1504_66914828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b821fc1cbe7fe2088753fd40f7e5b53307889e21' => 
    array (
      0 => 'logusr.tpl',
      1 => 1729231822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:go_home.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6718390a5f1504_66914828 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gecopia\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <h2>login</h2>
    <form action="login" method="post" autocomplete="off">
        nombre <input type="text" name="user" autocomplete="off"><br><br>
        clave <input type="password" name="password" autocomplete="off"><br><br>
        <input type="submit" value=" ingresar ">
    </form>
    <?php $_smarty_tpl->renderSubTemplate("file:go_home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
