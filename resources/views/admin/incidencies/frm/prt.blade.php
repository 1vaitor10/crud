<div class="row">
	<div class="col-md-12">
		<section class="panel"> 
			<div class="panel-body">
 
				@if ( !empty ( $incidencies->id_incidencia ) )
 
					<div class="mb-3">
						<label for="nom" class="negrita">nombre:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="nom" type="text" id="nom" value="{{ $incidencies->nom }}"> 
						</div>
					</div>

                    <div class="mb-3">
						<label for="tipus" class="negrita">tipus:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="tipus" type="text" id="tipus" value="{{ $incidencies->tipus }}"> 
						</div>
					</div>
 
					<div class="mb-3">
						<label for="descripcio" class="negrita">descripcio:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="descripcio" type="text" id="descripcio" value="{{ $incidencies->descripcio }}"> 
						</div>
					</div>
 
					<div class="mb-3">
						<label for="fot" class="negrita">Selecciona una imagen:</label> 
						<div>
							<input name="foto" type="file" id="fot">
							<br>
							<br>
 
							@if ( !empty ( $incidencies->foto) )
 
								<span>Imagen Actual: </span>
								<br>
								<img src="../../../uploads/{{ $incidencies->foto }}" width="200" class="img-fluid">
 
							@else
 
								Aún no se ha cargado una imagen para este producto
 
							@endif
 
						</div>
 
					</div>
 
 
					
					@else
 
                    <div class="mb-3">
						<label for="nom" class="negrita">nombre:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="nom" type="text" id="nom"> 
						</div>
					</div>

                    <div class="mb-3">
						<label for="tipus" class="negrita">tipus:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="tipus" type="text" id="tipus"> 
						</div>
					</div>
 
					<div class="mb-3">
						<label for="descripcio" class="negrita">descripcio:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="descripcio" type="text" id="descripcio"> 
						</div>
					</div>
 
					<div class="mb3">
                          <label for="img" class="negrita">Selecciona una imagen:</label>
                          <div>
                              <input name="img" type="file" id="imgen">
                          </div>
                      </div>
 
				@endif
 
				<button type="submit" class="btn btn-info">Guardar</button>
				<a href="{{ route('admin/incidencies') }}" class="btn btn-warning">Cancelar</a>
 
				<br>
				<br>
 
			</div>
		</section>
	</div>
</div> 