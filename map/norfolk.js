// https://docs.mapbox.com/help/tutorials/add-points-pt-2/
// https://docs.mapbox.com/mapbox-gl-js/example/geojson-line/
// https://docs.mapbox.com/mapbox-gl-js/example/geojson-layer-in-stack/
// https://www.lostcreekdesigns.co/writing/a-complete-guide-to-sources-and-layers-in-react-and-mapbox-gl-js/

mapboxgl.accessToken = 'pk.eyJ1Ijoiam1zYnJjd2h0IiwiYSI6ImNreGkzam9lOTBnbDYyb3F3cjF0a3VmZWIifQ.oWTLtlwjajr6o1jSvVIZRQ';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/jmsbrcwht/ckxo1t2ya4nj315t8lrnv9ifa',
  center: [-76.15, 36.8],
  zoom: 8
});
map.on('load', () => {
  map.addSource('usgs_1907', {
    'type': 'raster',
    'url': 'mapbox://jmsbrcwht.9fmtj111'
  });

  map.addSource("metes_bounds", {
    type: "vector",
    url: "mapbox://jmsbrcwht.ckxnjod974bav27ood55nbuyd-41oks",
  })

  map.addLayer({
    'id': 'usgs_1907',
    'source': 'usgs_1907',
    'type': 'raster'
  });
  map.addLayer({
    'id': 'metes_bounds',
    'source': 'metes_bounds',
    'type': 'line'
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