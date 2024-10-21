<?php
/* Smarty version 5.4.0, created on 2024-10-19 06:45:46
  from 'file:categorias.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_6713397aa7cae3_12457677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfea8683d3859cb9e89206ba63f720241321004a' => 
    array (
      0 => 'categorias.tpl',
      1 => 1729313144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6713397aa7cae3_12457677 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ge\\templates';
?><h2>categorías</h2>
<br>
<ul>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('arrCategorias'), 'categoria');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('categoria')->value) {
$foreach0DoElse = false;
?>
        <li><a href="categoria/<?php echo $_smarty_tpl->getValue('categoria')->id;?>
"><?php echo $_smarty_tpl->getValue('categoria')->nombre;?>
</a></li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>

<?php }
}
