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

// crear mapa en el div "map" y centrarlo en Guanajuato
var mapa  = L.map('mapa', {
    center: new L.LatLng(20.85304, -100.94788), 
    zoom: 4,
    layers: [backg ]
});

</script>
