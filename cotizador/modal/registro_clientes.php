<!-- Modal -->
<div class="modal fade" id="addModalClient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo cliente</h4>	
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
			<div id="resultados_ajax"></div>
			<div class="row">
				<div class="col-md-12">
					<label for="cliente" class="control-label">Nombre del cliente</label>
					<input type="text" class="form-control" id="cliente" name="cliente" placeholder="" required>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<label for="nombre_comercial" class="control-label">Nombre comercial</label>
					<input type="text" class="form-control" id="nombre_comercial" name="nombre_comercial" placeholder="" >
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-7">
					<label for="giro" class="control-label">Giro o actividad económica</label>
					<input type="text" class="form-control" id="giro" name="giro" placeholder="" >
				</div>
				
				<div class="col-md-5">
					<label for="cliente" class="control-label">Nº de registro fiscal</label>
					<input type="text" class="form-control" id="registro" name="registro" placeholder="" >
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<label for="direccion" class="control-label">Dirección</label>
					<textarea class="form-control" id="direccion" name="direccion"></textarea>
				</div>
				
				
			</div>
			
			<div class="row">
				<div class="col-md-7">
					<label for="email" class="control-label">Correo electrónico</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="" >
				</div>
				<div class="col-md-5">
					<label for="fijo" class="control-label">Teléfono</label>
					<input type="text" class="form-control" id="fijo" name="fijo" placeholder="" >
				</div>
				
				
			</div>
			  
			  
			  
			
			
			  
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>	<!-- Modal -->