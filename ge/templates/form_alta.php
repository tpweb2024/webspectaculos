<!-- formulario de alta de tarea -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
<form action="agregar" method="POST" class="my-4">
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






