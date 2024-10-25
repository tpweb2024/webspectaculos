<?php
/* Smarty version 5.4.0, created on 2024-10-23 13:47:00
  from 'file:mostrar_categoria.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_6718e234213213_15736827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e34f35b6c43b721fee8ff9b718c7eaa9ad55139b' => 
    array (
      0 => 'mostrar_categoria.tpl',
      1 => 1729314309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:eventos.tpl' => 1,
    'file:go_home.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6718e234213213_15736827 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gecopia\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <h2>Presentación de la categoría:</h2>
    <br>
    <h1><?php echo $_smarty_tpl->getValue('categoria')->nombre;?>
</h1>
    <br>
    <?php $_smarty_tpl->renderSubTemplate("file:eventos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <br>
    <?php $_smarty_tpl->renderSubTemplate("file:go_home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?> 
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
