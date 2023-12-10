<main role="main" class="ml-sm-auto px-4">

    <form method="post" action="<?= base_url() ?>empleados/guardar">

        <div class="col-md-12 mb-3 pb-2 pt-3 border-bottom">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="h2">Nueva empleado</h1>
                </div>
                <div class="col-md-2 text-right">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group row">
                <label for="nom_empleado" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="nom_empleado" id="nom_empleado">
                </div>
            </div>
            <div class="form-group row">
                <label for="jerarquia" class="col-sm-2 col-form-label">Jerarquía</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="jerarquia" id="jerarquia">
                </div>
            </div>
            <div class="form-group row">
                <label for="cargo" class="col-sm-2 col-form-label">Cargo</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="cargo" id="cargo">
                </div>
            </div>
            <div class="form-group row">
                <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="correo" id="correo">
                </div>
            </div>
            <div class="form-group row">
                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>
            </div>
            <div class="form-group row">
                <label for="region" class="col-sm-2 col-form-label">Región</label>
                <div class="col-sm-3">
                    <select class="form-select" name="region" id="region">
                        <option value="norte">Norte</option>
                        <option value="centro" selected>Centro</option>
                        <option value="sur">Sur</option>
                        <option value="admin">Administrativo</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="zona" class="col-sm-2 col-form-label">Zona</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="zona" id="zona">
                </div>
            </div>
            <div class="form-group row">
                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="estado" id="estado">
                </div>
            </div>
            <div class="form-group row">
                <label for="municipio" class="col-sm-2 col-form-label">Municipio</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="municipio" id="municipio">
                </div>
            </div>
            <div class="form-group row">
                <label for="ciudad" class="col-sm-2 col-form-label">Ciudad</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="ciudad" id="ciudad">
                </div>
            </div>
            <div class="form-group row">
                <label for="lat" class="col-sm-2 col-form-label">Latitud</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="lat" id="lat">
                </div>
            </div>
            <div class="form-group row">
                <label for="lon" class="col-sm-2 col-form-label">Longitud</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="lon" id="lon">
                </div>
            </div>
        </div>

    </form>


    <hr />

    <div class="form-group row">
        <div class="col-sm-10">
            <a href="<?=base_url()?>empleados" class="btn btn-secondary">Volver</a>
        </div>
    </div>

</main>
