<?php
/* Smarty version 5.4.0, created on 2024-10-23 01:45:11
  from 'file:errores.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_671839071433b6_76456427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6afec8989adbafbbab142b81cc62dce71684912' => 
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
function content_671839071433b6_76456427 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gecopia\\templates';
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
