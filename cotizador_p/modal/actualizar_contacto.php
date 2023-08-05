<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo contacto
                a: </h4>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true"></span></button>

            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="post" id="editar_contacto" name="editar_contacto">
                <div id="resultados_ajax_3"></div>
                <div class="row">
                  <div class="col-sm-12">
                    <label for="nombre_contact" class="control-label">Nombre del contacto</label>

                    <input type="text" class="form-control" id="nombre_contact" name="nombre_contact" placeholder=""
                      required>
                    <input type="hidden" class="form-control" id="id_contact" name="id_contact" placeholder="" required>
                  </div>
                </div>


                <div class="row">
                  <div class="col-sm-12">
                    <label for="telefono_contact" class="control-label">Teléfono de contacto</label>

                    <input type="text" class="form-control" id="telefono_contact" name="telefono_contact" placeholder=""
                      required>
                  </div>
                </div>


                <div class="row">
                  <div class="col-sm-12">
                    <label for="email_contact" class="control-label">Correo electrónico</label>

                    <input type="email" class="form-control" id="email_contact" name="email_contact" placeholder="">
                  </div>

                </div>





            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary actualizar_datos">Actualizar datos</button>
            </div>
            </form>
          </div>
        </div>
      </div>