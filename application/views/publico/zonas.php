<div class="col-sm-10 offset-sm-1">
    <ul class="nav nav-tabs justify-content-center mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link rounded-0 titulo active" id="pills-estados-tab" data-bs-toggle="pill" data-bs-target="#pills-estados" type="button" role="tab" aria-controls="pills-estados" aria-selected="true" onclick="ubica_region('estados')">Estados</button>
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
        <button class="nav-link rounded-0 titulo" id="pills-admin-tab" data-bs-toggle="pill" data-bs-target="#pills-admin" type="button" role="tab" aria-controls="pills-admin" aria-selected="false" onclick="ubica_region('administrativo')">Administrativo</button>
        </li>
    </ul>
</div>

<div class="col-sm-12 fondo_azul_claro pt-4 pb-3">
    <div class="col-sm-10 offset-sm-1">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-estados" role="tabpanel" aria-labelledby="pills-estados-tab" tabindex="0">
                <div class="card bg-transparent border-0 mb-3">
                    <div id="tbl_empleados_estado" class="col-sm-12">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Cargo</th>
                                    <th scope="col" class="col-escritorio">Zona</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody id="tbl_empleados">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-norte" role="tabpanel" aria-labelledby="pills-norte-tab" tabindex="0">
                <div class="card bg-transparent border-0 mb-3">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cargo</th>
                                <th scope="col" class="col-escritorio">Zona</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($norte as $norte_item) { ?>
                            <tr>
                                <td><a href="#" class="persona" onclick="info_persona(<?=$norte_item['cve_empleado']?>)"><?= $norte_item['nom_empleado'] ?></a></td>
                                <td><?= $norte_item['cargo'] ?></td>
                                <td class="col-escritorio"><?= $norte_item['zona'] ?></td>
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
                                <th scope="col" class="col-escritorio">Zona</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($centro as $centro_item) { ?>
                            <tr>
                                <td><a href="#" class="persona" onclick="info_persona(<?=$centro_item['cve_empleado']?>)"><?= $centro_item['nom_empleado'] ?></a></td>
                                <td><?= $centro_item['cargo'] ?></td>
                                <td class="col-escritorio"><?= $centro_item['zona'] ?></td>
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
                                <th scope="col" class="col-escritorio">Zona</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sur as $sur_item) { ?>
                            <tr>
                                <td><a href="#" class="persona" onclick="info_persona(<?=$sur_item['cve_empleado']?>)"><?= $sur_item['nom_empleado'] ?></a></td>
                                <td><?= $sur_item['cargo'] ?></td>
                                <td class="col-escritorio"><?= $sur_item['zona'] ?></td>
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
                                <th scope="col" class="col-escritorio">Zona</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($admin as $admin_item) { ?>
                            <tr>
                                <td><a href="#" class="persona" onclick="info_persona(<?=$admin_item['cve_empleado']?>)"><?= $admin_item['nom_empleado'] ?></a></td>
                                <td><?= $admin_item['cargo'] ?></td>
                                <td class="col-escritorio"><?= $admin_item['zona'] ?></td>
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
