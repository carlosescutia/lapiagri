<script>
/**********************************************
 * 
 * Mapa Agri
 *
 * ****************************************/

var currEstado;

function onEachFeature(feature, layer) {
    layer.on({
        click: function(e){
            lati = e.latlng.lat.toFixed(6);
            longi = e.latlng.lng.toFixed(6);
            empleados_estado(lati, longi);
            if (currEstado) {
                lyr_estados.resetStyle(currEstado);
            }
            highlightFeature(e);
        },
    });
}

function highlightFeature(e) {
    var estado = e.target;
    estado.setStyle({
        fillColor: '#4e8c68',
        fillOpacity: 0.4,
        color: '#4e8c68',
        weight: 2,
        opacity: 0.6,
        dashArray: '6'
    });
    currEstado = estado;
}

function resetHighlight(e) {
    lyr_estados.resetStyle(e.target);
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

function empty_style(feature){
    return {
        fillOpacity: 0,
        opacity: 0,
    };
}

function ubica_persona(lat, lon) {
    currzoom = mapa.getZoom();
    marcadores.clearLayers();
    var marker = L.marker([lat, lon]).addTo(marcadores);
}

function limpiar_info(){
    capas.clearLayers();
    marcadores.clearLayers();
    $('#info_blank').removeClass("d-none");
    $('#info_contacto').addClass("d-none");
}

function ubica_region(region) {
    limpiar_info();
    switch(region) {
        case 'estados':
            lyr_estados.addTo(capas);
            mapa.fitBounds(lyr_estados);
            break;
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
        case 'administrativo':
            lyr_administrativo.addTo(capas);
            mapa.fitBounds(lyr_administrativo);
            break;
    }
}

var lyr_estados = new L.GeoJSON.AJAX("<?=base_url()?>capas/estados.geojson", {
    style: empty_style,
    onEachFeature:onEachFeature,
});
var lyr_norte = new L.GeoJSON.AJAX("<?=base_url()?>capas/norte.geojson", {
    style: style,
});
var lyr_centro = new L.GeoJSON.AJAX("<?=base_url()?>capas/centro.geojson", {
    style: style,
});
var lyr_sur = new L.GeoJSON.AJAX("<?=base_url()?>capas/sur.geojson", {
    style: style,
});
var lyr_administrativo = new L.GeoJSON.AJAX("<?=base_url()?>capas/estados.geojson", {
    style: empty_style,
});

var backgUrl = '//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
backgAttribution = '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>';
var backg  = L.tileLayer(backgUrl, {maxZoom: 18, attribution: backgAttribution});

var mapa  = L.map('mapa', {
    center: new L.LatLng(23.85304, -102.94788), 
    zoom: 5,
    layers: [backg ],
    gestureHandling: true
});

marcadores = L.layerGroup().addTo(mapa);
capas = L.layerGroup().addTo(mapa);

function onMapClick(e) {
    lati = e.latlng.lat.toFixed(6);
    longi = e.latlng.lng.toFixed(6);
    empleados_estado(lati, longi);
}
mapa.on('click', onMapClick);

</script>
