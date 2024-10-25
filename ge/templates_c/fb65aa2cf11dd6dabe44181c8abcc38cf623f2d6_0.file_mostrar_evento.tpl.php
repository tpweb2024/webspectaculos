<?php
/* Smarty version 5.4.0, created on 2024-10-23 01:49:51
  from 'file:mostrar_evento.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_67183a1fe99081_28108499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb65aa2cf11dd6dabe44181c8abcc38cf623f2d6' => 
    array (
      0 => 'mostrar_evento.tpl',
      1 => 1729314111,
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
function content_67183a1fe99081_28108499 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gecopia\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <h2>Presentación del evento:</h2>
    <br>
    <h1><?php echo $_smarty_tpl->getValue('evento')->nombre;?>
</h1>
    <br>
    <ul>
        <li><h3>categoría: <a href="categoria/<?php echo $_smarty_tpl->getValue('categoria')->id;?>
"><?php echo (($tmp = $_smarty_tpl->getValue('categoria')->nombre ?? null)===null||$tmp==='' ? "-" ?? null : $tmp);?>
</a></h3></li>
        <li><h3>fecha: <?php echo $_smarty_tpl->getValue('evento')->fecha;?>
</h3></li>
        <li><h3>descripción:</h3>
            <ul><li><?php echo $_smarty_tpl->getValue('evento')->descripcion;?>
</li></ul>
        </li>
    </ul><br>
    <?php $_smarty_tpl->renderSubTemplate("file:go_home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
