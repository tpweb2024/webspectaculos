<?php
/* Smarty version 5.4.0, created on 2024-10-19 07:00:10
  from 'file:eventos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_67133cda54bd39_02852128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7817986670241b17994380dbd6615a3825522fb' => 
    array (
      0 => 'eventos.tpl',
      1 => 1729313984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67133cda54bd39_02852128 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ge\\templates';
?>
<h2>eventos</h2>
<br>
<ul>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('arrEventos'), 'evento');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('evento')->value) {
$foreach0DoElse = false;
?>
        <li><a href="evento/<?php echo $_smarty_tpl->getValue('evento')->id;?>
"><?php echo $_smarty_tpl->getValue('evento')->nombre;?>
</a></li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>

<?php }
}
