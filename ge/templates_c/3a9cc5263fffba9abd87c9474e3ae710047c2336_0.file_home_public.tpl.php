<?php
/* Smarty version 5.4.0, created on 2024-10-26 11:04:55
  from 'file:home_public.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_671cb0b73ea1f5_71721286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a9cc5263fffba9abd87c9474e3ae710047c2336' => 
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
function content_671cb0b73ea1f5_71721286 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\ge\\templates';
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
