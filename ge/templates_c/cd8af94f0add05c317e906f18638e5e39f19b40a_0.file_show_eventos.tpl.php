<?php
/* Smarty version 5.4.0, created on 2024-10-30 00:54:24
  from 'file:show_eventos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_672175b08987d5_90636350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd8af94f0add05c317e906f18638e5e39f19b40a' => 
    array (
      0 => 'show_eventos.tpl',
      1 => 1730246058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header1.tpl' => 1,
    'file:footer1.tpl' => 1,
  ),
))) {
function content_672175b08987d5_90636350 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ge\\templates';
$_smarty_tpl->renderSubTemplate("file:header1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<h3 align='center'>Modificacion y Eliminacion de Eventos</h3>;
   <div class='container-xxl py-5'>
     <div class='container'>
       <div class='row g-4'>
            <ul class='list-group mt-5'>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('events'), 'event');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('event')->value) {
$foreach0DoElse = false;
?>
                    <li class='list-group-item'>
                     <a href="modificar/<?php echo $_smarty_tpl->getValue('event')->id;?>
">MODIFICAR  |</a><a href="eliminar/<?php echo $_smarty_tpl->getValue('event')->id;?>
">ELIMINAR  |</a>
                    <?php echo $_smarty_tpl->getValue('event')->nombre;?>

                    </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>;
        </div>;
     </div>;
  </div>;
<?php $_smarty_tpl->renderSubTemplate("file:footer1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
