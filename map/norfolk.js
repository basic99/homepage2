// https://docs.mapbox.com/help/tutorials/add-points-pt-2/
// https://docs.mapbox.com/mapbox-gl-js/example/geojson-line/
// https://docs.mapbox.com/mapbox-gl-js/example/geojson-layer-in-stack/
// https://www.lostcreekdesigns.co/writing/a-complete-guide-to-sources-and-layers-in-react-and-mapbox-gl-js/

mapboxgl.accessToken = 'pk.eyJ1Ijoiam1zYnJjd2h0IiwiYSI6ImNreGkzam9lOTBnbDYyb3F3cjF0a3VmZWIifQ.oWTLtlwjajr6o1jSvVIZRQ';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/jmsbrcwht/ckxo5x0no17ck14p9ur1u4ps9',
  center: [-76.15, 36.8],
  zoom: 8
});
map.on('load', () => {

  const layers = map.getStyle().layers;
  // Find the index of the first symbol layer in the map style.
  let firstSymbolId;
  for (const layer of layers) {
    console.log(layer)
    // if (layer.type === 'symbol') {
    //   firstSymbolId = layer.id;
    //   break;
    // }
  }

  map.addSource('usgs_1907', {
    'type': 'raster',
    'url': 'mapbox://jmsbrcwht.9fmtj111'
  });


  map.addLayer({
    'id': 'usgs_1907',
    'source': 'usgs_1907',
    'type': 'raster'
  }, 'little2');


});

$(document).ready(function() {
  console.log("loaded");
  $("#usgs_1907").change(function() {
    let val = $("#usgs_1907").prop("checked");
    console.log(val);
    if (val === true) {
      if (!map.getLayer('usgs_1907')) {
        map.addLayer({
          'id': 'usgs_1907',
          'source': 'usgs_1907',
          'type': 'raster'
        }, 'little2');
      }
    } else {
      // If a layer with ID 'state-data' exists, remove it.
      if (map.getLayer('usgs_1907')) {
        map.removeLayer('usgs_1907');
      }
    }
  });

  $("#metes_bounds").change(function() {
    let val = $("#metes_bounds").prop("checked");
    console.log(val);
    if (val === true) {
      map.setLayoutProperty(
        'little2',
        'visibility',
        'visible'
      );
    } else {
      // If a layer with ID 'state-data' exists, remove it.
      map.setLayoutProperty(
        'little2',
        'visibility',
        'none'
      );
    }
  });
});