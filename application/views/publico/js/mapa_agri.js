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
    markers.clearLayers();
    var marker = L.marker([lon, lat]).addTo(markers);
    mapa.setView([lon, lat], currzoom);
}

function ubica_region(region) {
    switch(region) {
        case 'norte':
            capas.clearLayers();
            lyr_norte.addTo(capas);
            mapa.fitBounds(lyr_norte);
            break;
        case 'centro':
            capas.clearLayers();
            lyr_centro.addTo(capas);
            mapa.fitBounds(lyr_centro);
            break;
        case 'sur':
            capas.clearLayers();
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
    center: new L.LatLng(20.85304, -100.94788), 
    zoom: 4,
    layers: [backg ]
});

markers = L.layerGroup().addTo(mapa);
capas = L.layerGroup().addTo(mapa);

</script>
