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
        <link rel="stylesheet" href="<?=base_url()?>css/leaflet-gesture-handling.min.css" type="text/css">
        <script src="<?=base_url()?>js/leaflet-gesture-handling.min.js"></script>

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    </head>
    <body>
        <main role="main" class="container-fluid">
