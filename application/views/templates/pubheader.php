<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url()?>img/favicon.png" sizes="16x16" type="image/png" />

        <title><?= $nom_sitio_corto ?? 'Lorem ipsum' ?></title>

        <!-- global css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/publico.css" />

        <!-- bootstrap 5.3 -->
        <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?=base_url()?>css/bootstrap-icons.css" rel="stylesheet"/>
        <script src="<?=base_url()?>js/bootstrap.bundle.min.js"></script>

        <!-- leaflet -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@0.7.2/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@0.7.2/dist/leaflet.js"></script>
        <script src="<?=base_url()?>js/leaflet.ajax.min.js"></script>

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light fixed-top d-print-block pr-3">

            <div class="col-sm-8 offset-sm-3 container-fluid text-center">
                <div class="logo_menu">
                    <a href="<?=base_url()?>"><img class="logo" src="<?=base_url()?>img/<?= $logo_org_sitio ?? 'logotipo.png' ?>" class="d-inline-block align-top" alt="logo"></a>
                </div>

                <button class="navbar-toggler navbar-toggler-right pr-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="col-sm-7 mt-2 text-center">
                        <h5 class="texto-titulo"><?= $nom_sitio_largo ?? 'Lorem ipsum' ?></h5>
                        <ul class="navbar-nav mr-auto">
                            <?php foreach ($opciones_publicas as $opciones_publicas_item) { ?>
                                <li class="nav-item"><a class="nav-link" href="<?=base_url()?><?=$opciones_publicas_item['url'] ?>"><?=$opciones_publicas_item['nom_opcion'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

        </nav>

        <main role="main" class="container-fluid">
