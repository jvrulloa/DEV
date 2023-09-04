<!--modal de editar-cliente-->
<?PHP
if (isset($con)) {
?>
    <div class="modal fade" id="editCliente" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header alert alert-success">
                    <h5 class="modal-title" id="exampleModalLabel"><i class='fas fa-edit'></i> EDITAR CLIENTE <?php  ?></h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                </div>
                <div id="error"></div>
                <div id="victory"></div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post" id="editar_cliente" name="editar_cliente">
                        <div id="resultados_cliente"></div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-6 p-2">
                                <div class="form-outline input-group  has-validation ">
                                    <input type="text" class="form-control" id="mod_dui_cliente" name="mod_dui_cliente" aria-describedby="duiCli" onkeyup="fncdui(this,'-',patrondui,true)" minlength="10" pattern=".{10,}" maxlength="10" required />
                                    <label class="form-label" for="mod_dui_cliente">Dui cliente</label>
                                    <input type="hidden" id="mod_id" name="mod_id" />
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="form-outline input-group has-validation">
                                    <input type="text" class="form-control" id="mod_nombre_cliente" name="mod_nombre_cliente" aria-describedby="nomCli" onkeypress="return caracteres(event)" onblur="this.value=this.value.toUpperCase();" required />
                                    <label class="form-label" for="mod_nombre_cliente">Nombre cliente</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-3 p-2" id="estado_cli">
                                <div class="form-label-group in-border  has-validation">
                                    <select class="form-control" id="mod_estado_cliente" name="mod_estado_cliente" aria-label="Default select example" required>
                                        <option value="0" selected>Seleccione</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                    <label class="form-label" for="mod_estado_cliente">Estado del cliente</label>
                                </div>
                            </div>
                            <div class="col-md-3 p-2" id="tipo_cli">
                                <div class="form-label-group in-border has-validation">
                                    <select class="form-control" id="mod_tipo_cliente" name="mod_tipo_cliente" aria-label="Default select example" required>
                                        <option value="" selected>Seleccione</option>
                                        <option value="1">Natural</option>
                                        <option value="2">Juridico</option>
                                        <option value="3">Exento</option>
                                    </select>
                                    <label class="form-label" for="mod_tipo_cliente">Tipo de cliente</label>
                                </div>
                            </div>
                            <div class="col-md-6 p-2" id="natural2">
                                <div class="form-outline input-group  has-validation">
                                    <input type="text" class="form-control" id="mod_nomcom_cliente" name="mod_nomcom_cliente" onblur="this.value=this.value.toUpperCase();" required />
                                    <label class="form-label" for="mod_nomcom_cliente">Nombre comercial</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row nat " id="natural">
                            <div class="col-md-6 p-2">
                                <div class="form-label-group in-border  has-validation">
                                    <select class="form-select select2" id="mod_giro" name="mod_giro" aria-label="validationServer04Feedback" required>
                                        <option class="l2" selected disabled value="">Seleccione</option>
                                        <?php
                                        $gir_giros = $user->buscar("gir_giro", "1");
                                        foreach ($gir_giros as $giro) :
                                            $idgiro = $giro['gir_id'];
                                            $nombregiro = $giro['gir_nombre']; ?>
                                            <option value="<?php echo $idgiro ?>"><?php echo $nombregiro ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label class="form-label" for="mod_giro">Giro o actividad economica</label>
                                </div>
                            </div>
                            <div class="col-md-3 p-2">
                                <div class="form-outline input-group has-validation">
                                    <input type="text" class="form-control" id="mod_nit" name="mod_nit" oninput="formatearNIT(this)" aria-describedby="nitCli" required />
                                    <label class="form-label" for="mod_nit">Nit del cliente</label>
                                    <div id="nitCli" class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 p-2">
                                <div class="form-outline input-group  has-validation">
                                    <input type="text" class="form-control" id="mod_registro" name="mod_registro" aria-describedby="regCli" required>
                                    <label class="form-label" for="mod_registro">Nº de registro fiscal</label>
                                    <div id="regCli" class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-7 p-2">
                                <div class="form-outline">
                                    <input type="email" class="form-control  has-validation" id="mod_email" name="mod_email" required />
                                    <label class="form-label" for="form12">Correo electrónico</label>
                                </div>
                            </div>
                            <div class="col-md-5 p-2">
                                <div class="form-outline input-group  has-validation">
                                    <input type="text" class="form-control" id="mod_tel" name="mod_tel" onkeyup="fnc1(this,'-',patron1,true)" required />
                                    <label class="form-label" class="form-label" for="form12">Teléfono</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-6 p-2">
                                <div class="form-label-group in-border  has-validation">
                                    <select class="form-control " id="mod_depto" name="mod_depto" aria-describeby="depCli" required>
                                        <option value="" selected>Seleccione</option>
                                        <?php
                                        $departamentos = $user->buscar("departamentos", "1");
                                        foreach ($departamentos as $departamento) :
                                            $iddepto = $departamento['dep_id']; ?>
                                            <option value="<?php echo $iddepto ?>"><?php echo $departamento['dep_nombre'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label class="form-label" for="mod_depto">Departamento</label>
                                    <div id="depCli" class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="form-label-group in-border  has-validation">
                                    <select class="form-control" id="mod_muni" name="mod_muni" aria-label="Default select example" required>
                                        <option value="" selected>Seleccione</option>
                                    </select>
                                    <label class="form-label" for="mod_muni">Municipio</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xlg-12 col-xs-12 p-2">
                                <div class="form-outline input-group  has-validation">
                                    <textarea class="form-control" id="mod_direccion" name="mod_direccion" rows="2" onblur="this.value=this.value.toUpperCase();" required></textarea>
                                    <label class="form-label" for="mod_direccion">Dirección</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" id="actualizar_datos" name="actualizar_datos">Actualizar datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>