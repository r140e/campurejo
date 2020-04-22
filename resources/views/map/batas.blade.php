<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Batas Desa</title>
  <link rel="stylesheet" href="{{ asset('/css/uikit.min.css') }}"/>
  <script src="{{ asset('/js/uikit.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/uikit-icons.min.js') }}" type="text/javascript"></script>   

  <link rel="stylesheet" href="{{ asset('/js/leaflet/leaflet.css') }}"/>
  <script src="{{ asset('/js/leaflet/leaflet.js') }}"></script>

  <script src="{{ asset('/js/leaflet/plugin/leaflet-ajax/dist/leaflet.ajax.js') }}"></script>
  <script src="{{ asset('/js/leaflet/plugin/leaflet-providers-master/leaflet-providers.js') }}"></script>

  <link rel="stylesheet" href="{{ asset('/js/leaflet/plugin/sidebar-v2-master/css/leaflet-sidebar.css') }}"/>
  <script src="{{ asset('/js/leaflet/plugin/sidebar-v2-master/js/leaflet-sidebar.js') }}"></script>  

  <link rel="stylesheet" href="{{ asset('/js/leaflet/plugin/leaflet.defaultextent-master/dist/leaflet.defaultextent.css') }}" />
  <script src="{{ asset('/js/leaflet/plugin/leaflet.defaultextent-master/dist/leaflet.defaultextent.js') }}"></script>              

  <link rel="stylesheet" href="{{ asset('/js/leaflet/plugin/leaflet-groupedlayercontrol/src/leaflet.groupedlayercontrol.css') }}"/>
  <script src="{{ asset('/js/leaflet/plugin/leaflet-groupedlayercontrol/src/leaflet.groupedlayercontrol.js') }}"></script>    

  <link rel="stylesheet" href="{{ asset('/js/leaflet/plugin/Leaflet.MousePosition-master/src/L.Control.MousePosition.css') }}" />
  <script src="{{ asset('/js/leaflet/plugin/Leaflet.MousePosition-master/src/L.Control.MousePosition.js') }}"></script>
  
  <link rel="stylesheet" href="{{ asset('/css/map.css') }}"/>
</head>
<body>
<div id="nav" class="uk-background-primary">
<nav class="uk-light" uk-navbar="mode: click">
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href="#offcanvas-nav-primary" uk-navbar-toggle-icon="" uk-toggle=""></a>
        <div id="offcanvas-nav-primary" uk-offcanvas="mode: reveal; overlay: true">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column">

            <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                <li class="uk-active"><a href="#">Active</a></li>
                <li class="uk-parent">
                    <a href="#">Parent</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Sub item</a></li>
                        <li><a href="#">Sub item</a></li>
                    </ul>
                </li>
                <li class="uk-nav-header">Header</li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
            </ul>

        </div>
        </div>
        <a href="/">Batas Desa</a>
    </div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li><a href="#" uk-toggle="target: #inf0">Info</a></li>                            
            <li class="uk-visible@s"><a href="#" uk-toggle="target: #inf2">Download</a></li>
        </ul>                              
    </div>
</nav>
</div>
<div id="map">
<script type="text/javascript">
</script>
<script type="text/javascript">
var map = L.map('map', {center: [-6.888936,112.457681], zoom: 14})

var baseLayers = {
  'MapBox' : L.tileLayer.provider('MapBox', {
      id: 'mapbox.satellite',
      accessToken: 'pk.eyJ1IjoidTIxMzZuIiwiYSI6ImNrM2lnMWJ3MDA3eGozYmxtcHdndDQxd2IifQ.pjhud5_6ZXDFQJxHVDGlLA',      
			minZoom: 14
  }),
  'Here SatteliteDay' : L.tileLayer.provider('HERE.satelliteDay', {
    app_id: 'devportal-demo-20180625',
    app_code: '9v2BkviRwi9Ot26kp2IysQ',
    minZoom: 12
  }).addTo(map),
  'Esri WorldImagery': L.tileLayer.provider('Esri.WorldImagery', {
    maxZoom: 17,
		minZoom: 12
  }),
  'Esri.WorldTopoMap': L.tileLayer.provider('Esri.WorldTopoMap', {
    maxZoom: 17,
		minZoom: 12
  })
};

L.control.scale({imperial: false}).addTo(map);
L.control.mousePosition().addTo(map);

var layer_BATASADMINISTRASI = new L.GeoJSON.AJAX("{{ asset('/layer/BatasAdministrasi.json') }}",{
  style: function(feature){
  var fillColor,
      desa = feature.properties.NAMOBJ;
      if ( desa == "PALOH" ) fillColor = "#f6e58d";
      else if ( desa == 'WERU' ) fillColor = "#ffbe76";
      else if ( desa == 'SIDOKUMPUL' ) fillColor = "#ff7979";
      else if ( desa == 'WARU LOR' ) fillColor = "#badc58";
      else if ( desa == 'CAMPURREJO' ) fillColor = "#e056fd";
      else fillColor = "#7ed6df";
    return { color: "#eaeaea", dashArray: '3', fillColor: fillColor, fillOpacity: .8 };
  },
  onEachFeature: function(feature, layer){
        layer.bindPopup(
        `<p>Desa : ` + feature.properties.NAMOBJ + `</p>` +
        `<p>Kecamatan : ` + feature.properties.WADMKC + `</p>` + 
        `<p>Kabupaten : ` + feature.properties.WADMKK + `</p>` +
        `<p>Provinsi : ` + feature.properties.WADMPR + `</p>`  
        ),
        that = this;
            layer.on('mouseover', function (e) {
                this.setStyle({
                weight: 5,
                color: '#888',
                dashArray: '',
                fillOpacity: 0.7
                });
            if (!L.Browser.ie && !L.Browser.opera) {
                layer.bringToFront();
            }
                info.update(layer.feature.properties);
            });
            layer.on('mouseout', function (e) {
                layer_BATASADMINISTRASI.resetStyle(e.target);
                info.update();
            });
    }
}).addTo(map);  
var overlays = {
      "Area": {
        "Batas": layer_BATASADMINISTRASI,
      },
      };
  var options2 = {
  groupCheckboxes: true
}; 
var layerControl = L.control.groupedLayers(baseLayers, overlays, options2).addTo(map);
map.addControl(layerControl);
var featureGroup = L.featureGroup().addTo(map);

function getColor(d) {
		return d == 'PALOH' ? '#f6e58d' :
			d == 'WERU' ? '#ffbe76':
      d == 'SIDOKUMPUL' ? '#ff7979':
      d == 'WARU LOR' ? '#badc58':
      d == 'CAMPURREJO' ? '#e056fd':
                        '#7ed6df';
	}
var legend = L.control({position: 'bottomright'});
  legend.onAdd = function (map) {
      var div = L.DomUtil.create('div', 'info legend'),      
          grades = ['CAMPURREJO', 'PALOH', 'WERU', 'SIDOKUMPUL', 'WARU LOR'],
          labels = [];
      // loop through our density intervals and generate a label with a colored square for each interval
      for (var i = 0; i < grades.length; i++) {
          div.innerHTML +=
              '<i style="background:' + getColor(grades[i]) + '"></i> ' +
              grades[i] + '<br>';
      }

      return div;
};
legend.addTo(map);
</script>
<footer id="footer">
<div class='uk-modal-full' id='inf0' uk-modal=''>
<div class='uk-modal-dialog'>
  <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
  <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
    <div class="uk-background-cover" style="background-image: url('/img/home.jpg');" uk-height-viewport></div>
    <div class="uk-padding-large">
      <h1>Tentang</h1>
      <p>Data berasal dari inageoportal</p>
      <p>Layer dibuat statis</p>
      <div class='uk-flex uk-flex-center uk-flex-left@s'>
          <a href='#' class='uk-button uk-button-danger uk-margin-right'>More</a>
          <a class='uk-button uk-button-default'>r140e</a>
      </div>
    </div>
  </div>
</div>
</div>
<div class='uk-flex-top' id='inf2' uk-modal=''>
<div class='uk-modal-dialog uk-margin-auto-vertical uk-overflow-auto'>
<div class='uk-modal-header'>
<span class='uk-modal-title uk-flex uk-flex-center'>Download Data</span>
<button class='uk-modal-close-default' type='button' uk-close=''></button>
</div>
<div class='uk-modal-body'>        
<table class="uk-table uk-table-striped uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Nama Layer</th>
            <th>Tipe File 1</th>
            <th>Tipe File 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Batas Adminstrasi</th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Abangunan&outputFormat=SHAPE-ZIP">SHP</a></th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Abangunan&outputFormat=application%2Fvnd.google-earth.kml%2Bxml">KML</a></th>
        </tr>
        <tr>
    </tbody>
</table>
</div>
<div class='uk-modal-footer uk-flex uk-flex-right'>
<button class='uk-button uk-modal-close uk-dark uk-margin-auto-left'>Close</button>
</div>
</div>
</div>
</footer>
</body>
</html>