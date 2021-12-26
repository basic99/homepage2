mapboxgl.accessToken = 'pk.eyJ1Ijoiam1zYnJjd2h0IiwiYSI6ImNreGkzam9lOTBnbDYyb3F3cjF0a3VmZWIifQ.oWTLtlwjajr6o1jSvVIZRQ';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
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