<div class="col-sm-10 offset-sm-1">
    <ul class="nav nav-tabs justify-content-center mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link rounded-0 titulo" id="pills-norte-tab" data-bs-toggle="pill" data-bs-target="#pills-norte" type="button" role="tab" aria-controls="pills-norte" aria-selected="true">Norte</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link rounded-0 titulo active" id="pills-centro-tab" data-bs-toggle="pill" data-bs-target="#pills-centro" type="button" role="tab" aria-controls="pills-centro" aria-selected="false">Centro</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link rounded-0 titulo" id="pills-sur-tab" data-bs-toggle="pill" data-bs-target="#pills-sur" type="button" role="tab" aria-controls="pills-sur" aria-selected="false">Sur</button>
        </li>
    </ul>
</div>

<div class="col-sm-12 fondo_azul_claro pt-4 pb-3">
    <div class="col-sm-10 offset-sm-1">
        <div class="tab-content" id="pills-tabContent">
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
                                <td><?= $norte_item['nom_personal'] ?></td>
                                <td><?= $norte_item['cargo'] ?></td>
                                <td><?= $norte_item['zona'] ?></td>
                                <td><?= $norte_item['estado'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade show active" id="pills-centro" role="tabpanel" aria-labelledby="pills-centro-tab" tabindex="0">
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
                                <td><?= $centro_item['nom_personal'] ?></td>
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
                                <td><?= $sur_item['nom_personal'] ?></td>
                                <td><?= $sur_item['cargo'] ?></td>
                                <td><?= $sur_item['zona'] ?></td>
                                <td><?= $sur_item['estado'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
