<script>
/**********************************************
 * 
 * Mapa Agri
 *
 * ****************************************/

// add a OpenStreetMap tile layer

var backgUrl = '//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
backgAttribution = '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>';

var backg  = L.tileLayer(backgUrl, {maxZoom: 18, attribution: backgAttribution});

function ubica_persona(lon, lat) {
    currzoom = mapa.getZoom();
    marcadores.clearLayers();
    var marker = L.marker([lon, lat]).addTo(marcadores);
}

function limpiar_info(){
    capas.clearLayers();
    marcadores.clearLayers();
    $('#info_blank').removeClass("d-none");
    $('#info_contacto').addClass("d-none");
}

function inicio_mapa(){
    limpiar_info();
    lon=23.85304;
    lat=-102.94788; 
    mapa.setView([lon, lat], 5);
}

function ubica_region(region) {
    limpiar_info();
    switch(region) {
        case 'norte':
            lyr_norte.addTo(capas);
            mapa.fitBounds(lyr_norte);
            break;
        case 'centro':
            lyr_centro.addTo(capas);
            mapa.fitBounds(lyr_centro);
            break;
        case 'sur':
            lyr_sur.addTo(capas);
            mapa.fitBounds(lyr_sur);
            break;
    }
}

function style(feature){
    return {
        fillColor: '#4e8c68',
        fillOpacity: 0.1,
        color: '#4e8c68',
        weight: 2,
        opacity: 0.5,
        dashArray: '6'
    };
}

var lyr_norte = new L.GeoJSON.AJAX("<?=base_url()?>capas/norte.geojson", {
    style: style,
});
var lyr_centro = new L.GeoJSON.AJAX("<?=base_url()?>capas/centro.geojson", {
    style: style,
});
var lyr_sur = new L.GeoJSON.AJAX("<?=base_url()?>capas/sur.geojson", {
    style: style,
});

// crear mapa en el div "map" y centrarlo en Guanajuato
var mapa  = L.map('mapa', {
    center: new L.LatLng(23.85304, -102.94788), 
    zoom: 5,
    layers: [backg ]
});

marcadores = L.layerGroup().addTo(mapa);
capas = L.layerGroup().addTo(mapa);

</script>
