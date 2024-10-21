<?php
/* Smarty version 5.4.0, created on 2024-10-19 07:07:28
  from 'file:home_public.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_67133e90c4aac5_43028321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9f347c4cf9e210f83ddff714c63d3bf708ad89f' => 
    array (
      0 => 'home_public.tpl',
      1 => 1729314447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67133e90c4aac5_43028321 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ge\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <h1>Guía de eventos</h1><br><br>
    <h2>Acceso público</h2>
    <br>
    <ul>
        <li><a href="eventos">Listado de eventos</a></li>
        <li><a href="categorias">Listado de categorías</a></li><br>
        <ul><li><a href="logusr">logUsr</a></li></ul>
    </ul>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
