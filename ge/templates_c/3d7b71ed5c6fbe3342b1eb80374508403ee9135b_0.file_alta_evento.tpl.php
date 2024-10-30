<?php
/* Smarty version 5.4.0, created on 2024-10-30 00:55:30
  from 'file:alta_evento.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_672175f2493730_75896561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d7b71ed5c6fbe3342b1eb80374508403ee9135b' => 
    array (
      0 => 'alta_evento.tpl',
      1 => 1730246127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header1.tpl' => 1,
    'file:footer1.tpl' => 1,
  ),
))) {
function content_672175f2493730_75896561 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ge\\templates';
$_smarty_tpl->renderSubTemplate("file:header1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
<form action=<?php echo "agregar";?>
 method="POST" class="my-4">
<h3 align="center"> ALTA DE EVENTOS</h3>
	<div class="row">
		<div class="col-9">
			<div class="form-group">
				<label>Evento</label>
				<input name="nombre" type="text" class="form-control">
			</div>
		</div>
		<div class="col-3">
			<div class="form-group">
				<label>Descripcion</label>
				<input name="descripcion" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>Fecha</label>
				<input name="fecha" type="date" class="form-control">		
			</div>
			<div class="form-group">
				<label>Tipo</label>
				<select name="tipo" class="form-control">
					<option value="1">1 Concierto</option>
					<option value="2">2 Recital</option>
					<option value="3">3 Obra de Teatro</option>
					<option value="4">4 Cine</option>
					<option value="5">5 Musical</option>
					<option value="6">6 Circo</option>
					<option value="7">7 Titeres y Marionetas</option>
				</select>
			</div>	
		</div>
  
    <button type="submit" class="bnt btn-primary mt-2">Guardar</button>
	</div>
</form>
</div>
    </div>
	</div>
	<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0"></div>
<?php $_smarty_tpl->renderSubTemplate("file:footer1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
