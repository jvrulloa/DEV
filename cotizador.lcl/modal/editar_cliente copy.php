<!--modal de editar-cliente-->
<?PHP

if (ISSET($con)){



?>
<div class="modal fade" id="editCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header alert alert-success">
                <h5 class="modal-title" id="exampleModalLabel"><i class='fas fa-edit'></i> EDITAR CLIENTE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="editar_cliente" name="editar_cliente">
                    <div id="resultados_cliente"></div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-outline">
                                <input type="text" class="form-control" id="mod_dui_cliente"name="mod_dui_cliente"
                                    required>
                                <label class="form-label" for="form12">Dui cliente</label>
                                <input type="hidden" id="mod_id" name="mod_id">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline">
                                <input type="text" class="form-control" id="mod_nombre_cliente"name="mod_nombre_cliente" required>
                                <label class="form-label" for="form12">Nombre cliente</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-floating">
                                <select class="form-select" id="mod_estado_cliente" name="mod_estado_cliente" aria-label="Default select example">
                                <option selected>Seleccione</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                        
                                </select>
                                <label class="form-label select-label activate" for="mod_estado_cliente">Estado del cliente</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <select class="form-select" id="mod_tipo_cliente" name="mod_tipo_cliente" aria-label="Default select example">
                                        <option selected>Seleccione</option>
                                        <option value="1">Natural</option>
                                        <option value="2">Juridico</option>
                                        <option value="3">Exento</option>
                                </select>
                                <label class="form-label select-label activate" for="mod_tipo_cliente">Tipo de cliente</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline">
                                <input type="text" class="form-control" id="mod_nomcom_cliente"name="mod_nomcom_cliente" required>
                                <label class="form-label" for="form12">Nombre comercial</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-outline">
                                    <input type="text" class="form-control" id="mod_giro"name="mod_giro" required>
                                    <label class="form-label" for="form12">Giro o activdad economica</label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-outline">
                                    <input type="text" class="form-control" id="mod_registro"name="mod_registro" required>
                                    <label class="form-label" for="form12">Nº de registro fiscal</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-outline">
                                <input type="text" class="form-control" id="mod_email"name="mod_email" required>
                                <label class="form-label" for="form12">Correo electrónico</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-outline">
                                <input type="text" class="form-control" id="mod_tel"name="mod_tel" required>
                                <label class="form-label" for="form12">Teléfono</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-floating">
                                <select class="form-select" id="mod_depto" name="mod_depto" aria-label="Default select example" onclick='load(1);'>
                                    <option selected>Seleccione</option>
                                    <?php
                                    $sqldepto=mysqli_query($con,"select * from dep_departamento");
                                    
                                    while ($rwdepto = mysqli_fetch_array($sqldepto)) 
                                    {
                                        $id_depto=$rwdepto['dep_id'];
                                        $nombre_depto=$rwdepto['dep_nombre'];
                                        ?>

                                        <option value="<?php echo $id_depto;?>"><?php echo $nombre_depto;?></option>
                                        
                                        <?php } ?>

                                </select>
                                <label class="form-label select-label activate" for="mod_depto">Departamento</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                
                                <select class="form-select" id="mod_muni" name="mod_muni" aria-label="Default select example" onclick='load(1);'>
                                <option selected>Seleccione</option>
                                   <?php
                                    $sqlmuni=mysqli_query($con,"select * from mun_municipio  ");
                                    
                                    while ($rwmuni = mysqli_fetch_array($sqlmuni)) 
                                    {
                                        $id_muni=$rwmuni['mun_id'];
                                        $nombre_muni=$rwmuni['mun_nombre'];
                                        ?>

                                        <option value="<?php echo $id_muni;?>"><?php echo $nombre_muni;?></option>
                                        
                                        <?php }?>
                                </select>
                                <label class="form-label select-label activate" for="mod_muni">Municipio</label>
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xlg-12 col-xs-12">
                            <div class="form-outline">
                                <textarea class="form-control" id="mod_direccion" name="mod_direccion" rows="2"></textarea>
                                <label class="form-label" for="textAreaExample">Dirección</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        
                    </div>
                    

                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
                    </div>
                </form>
            </div>      
        </div>
    </div>
</div>
                                <?PHP }?>