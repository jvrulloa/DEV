<?php
if (isset($con)) {
?>
<div class="modal fade" id="agregarContacto" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo
                    contacto
                    a: </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            </div>
            <div class="modal-body" id="Validado_contacto">
                <form class="form-horizontal" novalidate method="post" id="guardar_contacto" name="guardar_contacto">
                    <div id="resultados_contacto"></div>
                    <div class="row">
                    <div class="col-sm-12">
                         <div class="form-label-group in-border">
                            <input type="text" class="form-control" id="mod_nombre_cont" name="mod_nombre_cont"/>
                            <label class="form-label" for="mod_nombre_cont">Nombre del contacto</label>
							<input type="hidden" id="mod_id_cli" name="mod_id_cli" />
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                                <div class="form-label-group in-border">
                                    <input type="text" class="form-control" id="mod_tel_cont" name="mod_tel_cont" required />
                                    <label class="form-label" for="mod_tel_cont">Teléfono de contacto</label>
                                </div>
                     </div>
                     </div>
                    <div class="row">
                    <div class="col-sm-12">
                                <div class="form-label-group in-border">
                                    <input type="text" class="form-control" id="mod_email_cont" name="mod_email_cont" required />
                                    <label class="form-label" for="mod_email_cont">Correo electrónico</label>
                                </div>
                    </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id="guardar_datos_contacto">Guardar datos</button>
            </div>
            </form>
        </div>
    </div>
</div> <!-- Modal -->

<?php } ?>