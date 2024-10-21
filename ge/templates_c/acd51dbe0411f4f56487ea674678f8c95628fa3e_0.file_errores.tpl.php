<?php
/* Smarty version 5.4.0, created on 2024-10-18 05:41:18
  from 'file:errores.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_6711d8de7a0e34_77810090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acd51dbe0411f4f56487ea674678f8c95628fa3e' => 
    array (
      0 => 'errores.tpl',
      1 => 1729222858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6711d8de7a0e34_77810090 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ge\\templates';
if (($_smarty_tpl->getSmarty()->getModifierCallback('count')((($tmp = $_smarty_tpl->getValue('arrErrores') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) > 0)) {?>
    <h2>errores</h2>
    <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('arrErrores'), 'error');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach1DoElse = false;
?>
        <li><?php echo $_smarty_tpl->getValue('error');?>
</li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>   
<?php }
}
}
