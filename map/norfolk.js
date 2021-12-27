// https://docs.mapbox.com/help/tutorials/add-points-pt-2/
// https://docs.mapbox.com/mapbox-gl-js/example/geojson-line/
// https://docs.mapbox.com/mapbox-gl-js/example/geojson-layer-in-stack/
// https://www.lostcreekdesigns.co/writing/a-complete-guide-to-sources-and-layers-in-react-and-mapbox-gl-js/

mapboxgl.accessToken = 'pk.eyJ1Ijoiam1zYnJjd2h0IiwiYSI6ImNreGkzam9lOTBnbDYyb3F3cjF0a3VmZWIifQ.oWTLtlwjajr6o1jSvVIZRQ';
var map = new mapboxgl.Map({
  container: 'map',
  // style: 'mapbox://styles/jmsbrcwht/ckxnrx4462e1o16s8kbm9i0pz',
  style: 'mapbox://styles/jmsbrcwht/ckxns9ktj3rio14s6dupchz22',
  center: [-76.15, 36.8],
  zoom: 8
});
map.on('load', () => {
  map.addSource('usgs_1907', {
    'type': 'raster',
    'url': 'mapbox://jmsbrcwht.9fmtj111'
  });



  map.addLayer({
    'id': 'usgs_1907',
    'source': 'usgs_1907',
    'type': 'raster'
  });


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
        });
      }
    } else {
      // If a layer with ID 'state-data' exists, remove it.
      if (map.getLayer('usgs_1907')) {
        map.removeLayer('usgs_1907');
      }
    }


  });
});