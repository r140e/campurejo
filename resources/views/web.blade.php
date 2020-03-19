<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Desa Campurejo</title>
  <link rel="stylesheet" href="{{ asset('/css/uikit.min.css') }}"/>
  <script src="{{ asset('/js/uikit.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/uikit-icons.min.js') }}" type="text/javascript"></script>   

  <link rel="stylesheet" href="{{ asset('/js/leaflet/leaflet.css') }}"/>
  <script src="{{ asset('/js/leaflet/leaflet.js') }}"></script>

  <script src="{{ asset('/js/leaflet/plugin/leaflet-ajax/dist/leaflet.ajax.js') }}"></script>
  <script src="{{ asset('/js/leaflet/plugin/leaflet-providers-master/leaflet-providers.js') }}"></script>

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
          <a class="uk-navbar-item uk-logo" href="/"><img width="50" height="50" src="{{ asset('/img/its-putih.png') }}"/></a>
          <a href="/">Campurejo</a>
      </div>
      <div class="uk-navbar-right">
          <ul class="uk-navbar-nav uk-visible@s">
              <li><a href="#" uk-toggle="mode: click; target: #inf0">Info</a></li>                            
              <li><a href="#" uk-toggle="mode: click; target: #inf2">Download</a></li>
              <li><a href="#">#</a></li>                    
          </ul>                    
          <a class="uk-navbar-toggle uk-hidden@s" href="#offcanvas-slide" uk-navbar-toggle-icon="" uk-toggle=""></a>
          <div id="offcanvas-slide" uk-offcanvas="mode: slide; overlay: true; flip: true;">
              <div class="uk-offcanvas-bar"><button class="uk-offcanvas-close" type="button" uk-close=""></button>
                  <ul class="uk-nav uk-nav-default">
                      <li><a href="#" uk-toggle="mode: click; target: #inf0">Info</a></li>
                      <li class="uk-nav-divider"></li>
                      <li class="uk-nav-divider"></li>
                      <li><a href="#" uk-toggle="mode: click; target: #inf2">Download</a></li> 
                  </ul>
              </div>
          </div>  
      </div>
  </nav>
  </div>

<div id="map">
<script>
// MENGATUR TITIK KOORDINAT TITIK TENGAN & LEVEL ZOOM PADA BASEMAP
var map = L.map('map', {
  center: [-6.888936,112.457681], zoom: 14})
// PILIHAN BASEMAP YANG AKAN DITAMPILKAN
var baseLayers = {
  // add Stamen Watercolor to map.
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

// MENAMPILKAN SKALA
L.control.scale({imperial: false}).addTo(map);
L.control.mousePosition({
  position:"bottomleft"
}).addTo(map);

// ------------------- VECTOR ----------------------------
var layer_BATASADMINISTRASI = new L.GeoJSON.AJAX("{{ asset('/layer/BatasAdministrasi.json') }}",{ // layer geologi berada di dalam variabel layer_geologi
  style: function(feature){
  var fillColor = "#c1faa1";  // no data
    return { color: "#eaeaea", dashArray: '3', fillColor: fillColor, fillOpacity: .8 }; // style border sertaa transparansi
  },
  onEachFeature: function(feature, layer){
        layer.bindPopup(
        `<p><b>Desa</b></p>` + feature.properties.NAMOBJ
        ),
      that = this; // perintah agar menghasilkan efek hover pada objek layer

            layer.on('mouseover', function (e) {
                this.setStyle({
                weight: .5,
                color: '#888',
                dashArray: '',
                fillOpacity: 0.5
                });

            if (!L.Browser.ie && !L.Browser.opera) {
                layer.bringToFront();
            }

                info.update(layer.feature.properties);
            });
            layer.on('mouseout', function (e) {
                layer_BATASADMINISTRASI.resetStyle(e.target); // isi dengan nama variabel dari layer
                info.update();
            });
    }
}).addTo(map);        
// membuat pilihan untuk menampilkan layer
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
var drawControl = new L.Control.Draw({
edit: {
  featureGroup: featureGroup
}
}).addTo(map);

map.on('draw:created', function(e) {
  featureGroup.addLayer(e.layer);
});
</script>
<footer id="footer">
<div class='uk-modal-container uk-flex-top' id='inf0' uk-modal=''>
<div class='uk-modal-dialog uk-margin-auto-vertical uk-overflow-auto'>
<div class='uk-modal-header'>
<span class='uk-modal-title uk-flex uk-flex-center'>WEB GIS Persebaran Usaha Desa Ngoro</span>
<button class='uk-modal-close-default' type='button' uk-close=''></button>
</div>
<div class='uk-modal-body uk-flex uk-flex-center'>
  <div class='uk-card uk-child-width-1-5@s uk-grid uk-grid-collapse uk-flex-middle' uk-grid=''>
          <div class='uk-card-media-left uk-cover-container uk-width-2-5@s'>
              <img alt='' src="{{ asset('/img/emote.jpg') }}" uk-cover=''/>
              <canvas height='300' width='300'></canvas>
          </div>
          <div class='uk-flex-last@s uk-card-body uk-width-3-5@s'>
              <h2 class='uk-heading-bullet uk-text-uppercase'>Info</h2>            
              <p>Data diambil dari citra satelit imagery milik esri pada bulan november 2019, menggunakan sistem datum WGS 84 dan sistem proyeksi DGN95 Zona 49S</p>
              <p>### Data layer dibuat statis di production ###</p>
              <div class='uk-flex uk-flex-center uk-flex-left@s'>
                  <a href='#' class='uk-button uk-button-danger uk-margin-right'>More</a>
                  <a class='uk-button uk-button-default'>u2136n</a>
              </div>
          </div>
  </div>
</div>
<div class='uk-modal-footer uk-flex uk-flex-right'>
<button class='uk-button uk-modal-close uk-dark uk-margin-auto-left'>Close</button>
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
            <th>Bangunan</th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Abangunan&outputFormat=SHAPE-ZIP">SHP</a></th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Abangunan&outputFormat=application%2Fvnd.google-earth.kml%2Bxml">KML</a></th>
        </tr>
        <tr>
            <th>Bidang Sawah</th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Abidangsawah&outputFormat=SHAPE-ZIP">SHP</a></th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Abidang&outputFormat=application%2Fvnd.google-earth.kml%2Bxml">KML</a></th>
        </tr>
        <tr>
            <th>Kebun</th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Akebun&outputFormat=SHAPE-ZIP">SHP</a></th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Akebun&outputFormat=application%2Fvnd.google-earth.kml%2Bxml">KML</a></th>
        </tr>
        <tr>
            <th>Lahan Kosong</th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Alahankosong&outputFormat=SHAPE-ZIP">SHP</a></th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Alahankosong&outputFormat=application%2Fvnd.google-earth.kml%2Bxml">KML</a></th>
        </tr>
        <tr>
            <th>Sungai Line</th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Asungai&outputFormat=SHAPE-ZIP">SHP</a></th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Asungai&outputFormat=application%2Fvnd.google-earth.kml%2Bxml">KML</a></th>
        </tr>
        
        <tr>
            <th>Jalan Line</th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Ajalan&outputFormat=SHAPE-ZIP">SHP</a></th>
            <th><a href="http://localhost:8080/geoserver/Ngoro/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ngoro%3Ajalan&outputFormat=application%2Fvnd.google-earth.kml%2Bxml">KML</a></th>
        </tr>
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