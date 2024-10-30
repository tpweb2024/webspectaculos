<?php
/* Smarty version 5.4.0, created on 2024-10-29 16:25:10
  from 'file:form_update.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_6720fe56e980f0_50499549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e18b092baae8a6993fb03f828acf53614cd887' => 
    array (
      0 => 'form_update.tpl',
      1 => 1730215454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header1.tpl' => 1,
  ),
))) {
function content_6720fe56e980f0_50499549 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ge\\templates';
$_smarty_tpl->renderSubTemplate("file:header1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
<form action=<?php echo "actualizar";?>
 method="POST" class="my-4">				
<h3 align="center"> Actualizar eventos</h3>
	<div class="row">
		<input type="text" name="nombre" class="form-group" value="<?php echo $_smarty_tpl->getValue('event')['nombre'];?>
">
	</div>
	<div class="row">
		<input type="text" name="descripcion" class="form-group" value="<?php echo $_smarty_tpl->getValue('event')['descripcion'];?>
">
	</div>
	<div class="row">
		<input type="date" name="fecha" class="form-control" value="<?php echo $_smarty_tpl->getValue('event')['fecha'];?>
">
	</div>	  
	<div class="row">
		<input type="text" name="tipo" class="form-control" value="<?php echo $_smarty_tpl->getValue('event')['tipo'];?>
">
	</div>	  	
    <button type="submit" class="bnt btn-primary mt-2">Guardar</button>
	</div>
</form>
</div>
    </div>
	</div>
	<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0"></div>
<?php }
}
