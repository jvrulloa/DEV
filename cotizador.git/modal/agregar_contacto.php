<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo
                    contacto
                    a: </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="guardar_contacto" name="guardar_contacto">
                    <div id="resultados_ajax_2"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="nombre_contact" class="control-label">Nombre del contacto</label>

                            <input type="text" class="form-control" id="nombre_contact" name="nombre_contact"
                                placeholder="" required>
                            <input type="hidden" class="form-control" id="id_client" name="id_client" placeholder=""
                                required>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <label for="telefono_contact" class="control-label">Teléfono de contacto</label>

                            <input type="text" class="form-control" id="telefono_contact" name="telefono_contact"
                                placeholder="" required>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <label for="email_contact" class="control-label">Correo electrónico</label>

                            <input type="email" class="form-control" id="email_contact" name="email_contact"
                                placeholder="">
                        </div>

                    </div>





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary guardar_datos">Guardar datos</button>
            </div>
            </form>
        </div>
    </div>
</div> <!-- Modal -->