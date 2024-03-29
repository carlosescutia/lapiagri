<div class="card mt-3 mb-3">
    <div class="card-header bg-success-subtle text-end">
        <a href="<?=base_url()?>"><img class="imagen_ancho" src="<?=base_url()?>img/<?= $logo_org_sitio ?? 'logotipo.png' ?>" alt="logo"></a>
    </div>
    <div class="card-body">
        <div id="info_blank" class="col-sm-12 text-center">
            <h5>Seleccione un contacto</h5>
            <div class="col-sm-3 offset-sm-4">
                <img src="<?=base_url()?>img/empleado.svg" class="foto_empleado" alt="empleado">
            </div>
        </div>
        <div id="info_contacto" class="col-sm-12 d-none">
            <div class="row mb-3">
                <div class="col-lg-4">
                    <img class="img-thumbnail rounded foto_empleado" id="foto_empleado" src="<?=base_url()?>img/empleado.svg">
                </div>
                <div class="col-lg-8">
                    <strong><p class="mb-0" id="nom_empleado">Nombre</p></strong>
                    <p id="cargo">Cargo</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="mb-0" id="correo">correo</p>
                    <p class="mb-0" id="telefono">telefono</p>
                    <span class="mb-0" id="estado">estado</span>
                </div>
            </div>
        </div>
    </div>
</div>
