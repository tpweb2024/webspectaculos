{include file="header1.tpl"}
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
<form action={"actualizar"} method="POST" class="my-4">				
<h3 align="center"> Actualizar eventos</h3>
	<div class="row">
		<input type="text" name="nombre" class="form-group" value="{$event['nombre']}">
	</div>
	<div class="row">
		<input type="text" name="descripcion" class="form-group" value="{$event['descripcion']}">
	</div>
	<div class="row">
		<input type="date" name="fecha" class="form-control" value="{$event['fecha']}">
	</div>	  
	<div class="row">
		<input type="text" name="tipo" class="form-control" value="{$event['tipo']}">
	</div>	  	
    <button type="submit" class="bnt btn-primary mt-2">Guardar</button>
	</div>
</form>
</div>
    </div>
	</div>
	<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0"></div>
