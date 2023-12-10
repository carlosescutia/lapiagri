<div class="col-sm-10 offset-sm-1">
    <ul class="nav nav-tabs justify-content-center mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link rounded-0 titulo active" id="pills-inicio-tab" data-bs-toggle="pill" data-bs-target="#pills-inicio" type="button" role="tab" aria-controls="pills-inicio" aria-selected="true" onclick="inicio_mapa()">Inicio</button>
        <li class="nav-item" role="presentation">
        <button class="nav-link rounded-0 titulo" id="pills-norte-tab" data-bs-toggle="pill" data-bs-target="#pills-norte" type="button" role="tab" aria-controls="pills-norte" aria-selected="false" onclick="ubica_region('norte')">Norte</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link rounded-0 titulo" id="pills-centro-tab" data-bs-toggle="pill" data-bs-target="#pills-centro" type="button" role="tab" aria-controls="pills-centro" aria-selected="false" onclick="ubica_region('centro')">Centro</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link rounded-0 titulo" id="pills-sur-tab" data-bs-toggle="pill" data-bs-target="#pills-sur" type="button" role="tab" aria-controls="pills-sur" aria-selected="false" onclick="ubica_region('sur')">Sur</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link rounded-0 titulo" id="pills-admin-tab" data-bs-toggle="pill" data-bs-target="#pills-admin" type="button" role="tab" aria-controls="pills-admin" aria-selected="false" onclick="inicio_mapa()">Administrativo</button>
        </li>
    </ul>
</div>

<div class="col-sm-12 fondo_azul_claro pt-4 pb-3">
    <div class="col-sm-10 offset-sm-1">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-inicio" role="tabpanel" aria-labelledby="pills-inicio-tab" tabindex="0">
                <div class="card bg-transparent border-0 mb-3 text-center">
                    <h4>Seleccione una región</h4>
                    <img class="logo" src="<?=base_url()?>img/<?= $logo_org_sitio ?? 'logotipo.png' ?>" class="d-inline-block align-top" alt="logo">
                </div>
            </div>
            <div class="tab-pane fade" id="pills-norte" role="tabpanel" aria-labelledby="pills-norte-tab" tabindex="0">
                <div class="card bg-transparent border-0 mb-3">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Zona</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($norte as $norte_item) { ?>
                            <tr>
                                <td><a href="#" class="persona" alt="<?=$norte_item['cve_empleado']?>"><?= $norte_item['nom_empleado'] ?></a></td>
                                <td><?= $norte_item['cargo'] ?></td>
                                <td><?= $norte_item['zona'] ?></td>
                                <td><?= $norte_item['estado'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-centro" role="tabpanel" aria-labelledby="pills-centro-tab" tabindex="0">
                <div class="card bg-transparent border-0 mb-3">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Zona</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($centro as $centro_item) { ?>
                            <tr>
                                <td><a href="#" class="persona" alt="<?=$centro_item['cve_empleado']?>"><?= $centro_item['nom_empleado'] ?></a></td>
                                <td><?= $centro_item['cargo'] ?></td>
                                <td><?= $centro_item['zona'] ?></td>
                                <td><?= $centro_item['estado'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-sur" role="tabpanel" aria-labelledby="pills-sur-tab" tabindex="0">
                <div class="card bg-transparent border-0 mb-3">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Zona</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sur as $sur_item) { ?>
                            <tr>
                                <td><a href="#" class="persona" alt="<?=$sur_item['cve_empleado']?>"><?= $sur_item['nom_empleado'] ?></a></td>
                                <td><?= $sur_item['cargo'] ?></td>
                                <td><?= $sur_item['zona'] ?></td>
                                <td><?= $sur_item['estado'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-admin" role="tabpanel" aria-labelledby="pills-admin-tab" tabindex="0">
                <div class="card bg-transparent border-0 mb-3">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Zona</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($admin as $admin_item) { ?>
                            <tr>
                                <td><a href="#" class="persona" alt="<?=$admin_item['cve_empleado']?>"><?= $admin_item['nom_empleado'] ?></a></td>
                                <td><?= $admin_item['cargo'] ?></td>
                                <td><?= $admin_item['zona'] ?></td>
                                <td><?= $admin_item['estado'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
