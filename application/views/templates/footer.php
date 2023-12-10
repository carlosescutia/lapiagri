        </main>

        <div class="footer_margin">
        </div>

        <footer class="footer">
            <div class="row mr-0 ms-0 me-0">
                <div class="col-sm-6 offset-sm-3">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">&copy; <?= $anio_org_sitio ?? '2023' ?> <?= $nom_org_sitio ?? 'Organización' ?></li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">·</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item"><i class="bi bi-telephone"></i> <?= $tel_org_sitio ?? '(123) 456 7890' ?> &nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">·</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item"><i class="bi bi-envelope"></i> <?= $correo_org_sitio ?? 'contacto@organizacion.inet' ?> &nbsp; </li>
                    </ul>
                </div>
                <div class="col-sm-2 offset-sm-1">
                    <ul class="list-unstyled">
                        <a href="#">
                            <li class="nav-item small mt-1">
                                Desarrollado por
                                <span><img src="<?=base_url()?>img/cenit.svg" class="imagen_ancho" alt="cenit"></span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </footer>
        
    </body>
</html>
