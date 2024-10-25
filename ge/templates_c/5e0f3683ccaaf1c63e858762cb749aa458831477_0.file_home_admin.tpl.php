<?php
/* Smarty version 5.4.0, created on 2024-10-23 01:42:19
  from 'file:home_admin.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_6718385b0260b5_20109677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e0f3683ccaaf1c63e858762cb749aa458831477' => 
    array (
      0 => 'home_admin.tpl',
      1 => 1729314595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6718385b0260b5_20109677 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gecopia\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <h1>Guía de eventos</h1><br><br>
    <h2>Acceso público</h2>
    <br>
    <ul>
        <li><a href="eventos">Listado de eventos</a></li>
        <li><a href="categorias">Listado de categorías</a></li><br>
        <li><a href="logout">logout</a></li><br>
    </ul><br>
    <h2>Acceso admin: <?php echo $_smarty_tpl->getValue('admin');?>
</h2>
    <br>
    <ul>
        <li><a href="crud">CRUD eventos/categorías</a></li>
    </ul>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
