<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Editar usuario</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
			<div class="row">
				<div class="col-sm-12">
					<label for="firstname2" class="control-label">Nombres</label>
					<input type="text" class="form-control" id="firstname2" name="firstname2" placeholder="Nombres" required>
					<input type="hidden" id="mod_id" name="mod_id">
				</div>
			  </div>
			  <div class="row">
			  <div class="col-sm-12">
				<label for="lastname2" class="control-label">Apellidos</label>
				
				  <input type="text" class="form-control" id="lastname2" name="lastname2" placeholder="Apellidos" required>
				</div>
			  </div>
			  <div class="row">
				<div class="col-sm-12">
					<label for="user_name2" class="control-label">Usuario</label>
				  <input type="text" class="form-control" id="user_name2" name="user_name2" placeholder="Usuario" pattern="[a-zA-Z0-9]{2,64}" title="Nombre de usuario ( sólo letras y números, 2-64 caracteres)"required>
				</div>
			  </div>
			  <div class="row">
				<div class="col-sm-12">
					<label for="user_email2" class="control-label">Email</label>
					<input type="email" class="form-control" id="user_email2" name="user_email2" placeholder="Correo electrónico" required>
				</div>
			  </div>

			  <div class="row">
				<div class="col-sm-12">
					<label for="user_group_id2" class="control-label">Grupo</label>
				
				  <select class="form-control" name="user_group_id2" id="user_group_id2">
													<option value="1" >Administrador</option>	
												</select>
				</div>
			  </div>
						 	 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>	<!-- Modal -->