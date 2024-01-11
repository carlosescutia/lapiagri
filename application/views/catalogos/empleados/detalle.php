<main role="main" class="ml-sm-auto px-4">

    <form method="post" action="<?= base_url() ?>empleados/guardar/<?= $empleados['cve_empleado'] ?>">

        <div class="col-md-12 mb-3 pb-2 pt-3 border-bottom">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="h2">Editar empleado</h1>
                </div>
                <div class="col-md-2 text-right">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>

        <div class="col-md-12">

            <div class="row mb-5">
                <div class="col-sm-4">
                    <label for="nom_empleado" class="col-sm-2 col-form-label fw-bold">Nombre</label>
                    <input type="text" class="form-control" name="nom_empleado" id="nom_empleado" value="<?=$empleados['nom_empleado'] ?>">
                </div>
                <div class="col-sm-4">
                    <label for="cargo" class="col-sm-2 col-form-label fw-bold">Cargo</label>
                    <input type="text" class="form-control" name="cargo" id="cargo" value="<?=$empleados['cargo'] ?>">
                </div>
                <div class="col-sm-4">
                    <label for="correo" class="col-sm-2 col-form-label fw-bold">Correo</label>
                    <input type="text" class="form-control" name="correo" id="correo" value="<?=$empleados['correo'] ?>">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-sm-1">
                    <label for="jerarquia" class="col-sm-2 col-form-label fw-bold">Jerarquía</label>
                    <input type="text" class="form-control" name="jerarquia" id="jerarquia" value="<?=$empleados['jerarquia'] ?>">
                </div>
                <div class="col-sm-3">
                    <label for="telefono" class="col-sm-2 col-form-label fw-bold">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" value="<?=$empleados['telefono'] ?>">
                </div>
                <div class="col-sm-3">
                    <label for="region" class="col-sm-2 col-form-label fw-bold">Región</label>
                    <select class="form-select" name="region" id="region">
                        <option value="norte" <?= ($empleados['region'] == 'norte' ? 'selected' : '') ?> >Norte</option>
                        <option value="centro" <?= ($empleados['region'] == 'centro' ? 'selected' : '') ?> >Centro</option>
                        <option value="sur" <?= ($empleados['region'] == 'sur' ? 'selected' : '') ?> >Sur</option>
                        <option value="admin" <?= ($empleados['region'] == 'admin' ? 'selected' : '') ?> >Administrativo</option>
                        <option value="staff" <?= ($empleados['region'] == 'staff' ? 'selected' : '') ?> >Staff</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="zona" class="col-sm-2 col-form-label fw-bold">Zona</label>
                    <input type="text" class="form-control" name="zona" id="zona" value="<?=$empleados['zona'] ?>">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-sm-4">
                    <label for="estado" class="col-sm-2 col-form-label fw-bold">Estado</label>
                    <input type="text" class="form-control" name="estado" id="estado" value="<?=$empleados['estado'] ?>">
                </div>
                <div class="col-sm-4">
                    <label for="municipio" class="col-sm-2 col-form-label fw-bold">Municipio</label>
                    <input type="text" class="form-control" name="municipio" id="municipio" value="<?=$empleados['municipio'] ?>">
                </div>
                <div class="col-sm-4">
                    <label for="ciudad" class="col-sm-2 col-form-label fw-bold">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" id="ciudad" value="<?=$empleados['ciudad'] ?>">
                </div>
            </div>
            
            <div class="row mb-5">
                <div class="col-sm-2">
                    <label for="lat" class="col-sm-2 col-form-label fw-bold">Latitud</label>
                    <input type="text" class="form-control" name="lat" id="lat" value="<?=$empleados['lat'] ?>">
                </div>
                <div class="col-sm-2">
                    <label for="lon" class="col-sm-2 col-form-label fw-bold">Longitud</label>
                    <input type="text" class="form-control" name="lon" id="lon" value="<?=$empleados['lon'] ?>">
                </div>
    </form>
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-header bg-success-subtle text-center">
                            <strong>Foto</strong>
                        </div>
                        <div class="card-body text-center">
                            <?php 
                            $dir_docs = 'fotos/';
                            $url_actual = base_url() . 'empleados/detalle/' . $empleados['cve_empleado'];
                            $tipo_archivo = 'jpg';
                            $nombre_archivo = $empleados['cve_empleado'] . '.' . $tipo_archivo ;
                            $nombre_archivo_fs = './' . $dir_docs . $nombre_archivo ;
                            $nombre_archivo_url = base_url() . $dir_docs . $nombre_archivo;
                            ?>

                            <?php if ( file_exists($nombre_archivo_fs) ) { ?>
                                <img class="img-fluid" src="<?=$nombre_archivo_url?>" >
                            <?php } else { ?>
                                <img src="<?=base_url()?>img/empleado.svg" class="img-fluid" alt="empleado">
                            <?php } ?>

                            <?php if (in_array('99', $accesos_sistema_rol)) { ?>
                            <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>archivos/subir">
                                <label tabindex="0" name="btn_archivo" id="btn_archivo"><i class="bi bi-file-plus boton-archivo-sm"></i>
                                    <input name="subir_archivo" id="subir_archivo" type="file" class="d-none" onchange="$('#btn_subir').removeClass('d-none'); $('#btn_archivo').addClass('d-none');">
                                </label>

                                <input type="hidden" name="dir_docs" value="<?=$dir_docs?>">
                                <input type="hidden" name="nombre_archivo" value="<?=$nombre_archivo?>">
                                <input type="hidden" name="tipo_archivo" value="<?=$tipo_archivo?>">
                                <input type="hidden" name="url_actual" value="<?=$url_actual?>">
                                <button id="btn_subir" type="submit" class="btn btn-sm d-none" style="background: none; color: #28A745">
                                    <i class="bi bi-upload boton-subir-sm"></i>
                                </button>
                                <?php if ( file_exists($nombre_archivo_fs) ) { 
                                    $item_eliminar = $nombre_archivo;
                                    ?>
                                    &nbsp;
                                    <a href="#dlg_borrar_archivos" data-bs-toggle="modal" onclick="pass_data('<?=$item_eliminar?>', '<?=$url_actual?>', '<?=$dir_docs?>')" ><i class="bi bi-x-circle boton-eliminar" ></i></a>
                                <?php } ?>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <hr />

    <div class="form-group row">
        <div class="col-sm-10">
            <a href="<?=base_url()?>empleados" class="btn btn-secondary">Volver</a>
        </div>
    </div>

</main>
