// https://docs.mapbox.com/help/tutorials/add-points-pt-2/
// https://docs.mapbox.com/mapbox-gl-js/example/geojson-line/
// https://docs.mapbox.com/mapbox-gl-js/example/geojson-layer-in-stack/
// https://www.lostcreekdesigns.co/writing/a-complete-guide-to-sources-and-layers-in-react-and-mapbox-gl-js/
// https://docs.mapbox.com/mapbox-gl-js/api/


mapboxgl.accessToken = 'pk.eyJ1Ijoiam1zYnJjd2h0IiwiYSI6ImNreGkzam9lOTBnbDYyb3F3cjF0a3VmZWIifQ.oWTLtlwjajr6o1jSvVIZRQ';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/jmsbrcwht/ckxo5x0no17ck14p9ur1u4ps9',

  center: [-76.15, 36.8],
  zoom: 9
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

  // const paintProperty = map.getPaintProperty('little2', 'line-color');
  // console.log(paintProperty)
  // let cond_css = [
  //   'case', ['boolean', ['feature-state', 'hover'], true],
  //   "#ff0000",
  //   "#0000ff"
  // ];
  // map.setPaintProperty('little2', 'line-color', cond_css);

  // map.addSource('metes_bounds_src', {
  //   'type': 'vector',
  //   'url': 'mapbox://jmsbrcwht.ckxnjod974bav27ood55nbuyd-41oks'
  // });

  map.addSource('metes_bounds_src', {
    'type': 'geojson',
    'data': 'http://localhost:8880/map/little2.json'
  });

  let test = map.getSource('metes_bounds_src');
  console.log(test);

  map.addSource('usgs_1907', {
    'type': 'raster',
    'url': 'mapbox://jmsbrcwht.9fmtj111'
  });
  map.addSource('granbery', {
    'type': 'raster',
    'url': 'mapbox://jmsbrcwht.7i5dnhgo'
  });

  map.addSource('sykes_gwathmey_ul', {
    'type': 'raster',
    'url': 'mapbox://jmsbrcwht.akvqv6ce'
  });
  map.addSource('sykes_gwathmey_ur', {
    'type': 'raster',
    'url': 'mapbox://jmsbrcwht.5od4ydl1'
  });

  map.addSource('sykes_gwathmey_ll', {
    'type': 'raster',
    'url': 'mapbox://jmsbrcwht.9cxt9o6s'
  });

  map.addSource('sykes_gwathmey_lr', {
    'type': 'raster',
    'url': 'mapbox://jmsbrcwht.5mk6oi6b'
  });


  map.addLayer({
    'id': 'usgs_1907',
    'source': 'usgs_1907',
    'type': 'raster'
  }, 'little2');

  map.addLayer({
    'id': 'metes_bounds_lyr',
    'source': 'metes_bounds_src',
    // 'source-layer': 'little2',
    'type': 'line',
    'paint': {
      'line-color': '#0000ff',
      'line-width': 2,
      'line-opacity': [
        'case', ['boolean', ['feature-state', 'hover'], false],
        1.0,
        0.1
      ]

    }

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
        }, 'little2');
      }
    } else {

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

      map.setLayoutProperty(
        'little2',
        'visibility',
        'none'
      );
    }
  });

  $("#owners").change(function() {
    let val = $("#owners").prop("checked");
    console.log(val);
    if (val === true) {
      map.setLayoutProperty(
        'owners',
        'visibility',
        'visible'
      );
    } else {

      map.setLayoutProperty(
        'owners',
        'visibility',
        'none'
      );
    }
  });

  $("#granbery").change(function() {
    let val = $("#granbery").prop("checked");
    console.log(val);
    if (val === true) {
      if (!map.getLayer('granbery')) {
        map.addLayer({
          'id': 'granbery',
          'source': 'granbery',
          'type': 'raster'
        }, 'little2');
      }
    } else {

      if (map.getLayer('granbery')) {
        map.removeLayer('granbery');
      }
    }
  });

  $("#sykes_gwathmey_ul").change(function() {
    let val = $("#sykes_gwathmey_ul").prop("checked");
    console.log(val);
    if (val === true) {
      if (!map.getLayer('sykes_gwathmey_ul')) {
        map.addLayer({
          'id': 'sykes_gwathmey_ul',
          'source': 'sykes_gwathmey_ul',
          'type': 'raster'
        }, 'little2');
      }
    } else {

      if (map.getLayer('sykes_gwathmey_ul')) {
        map.removeLayer('sykes_gwathmey_ul');
      }
    }
  });

  $("#sykes_gwathmey_ur").change(function() {
    let val = $("#sykes_gwathmey_ur").prop("checked");
    console.log(val);
    if (val === true) {
      if (!map.getLayer('sykes_gwathmey_ur')) {
        map.addLayer({
          'id': 'sykes_gwathmey_ur',
          'source': 'sykes_gwathmey_ur',
          'type': 'raster'
        }, 'little2');
      }
    } else {

      if (map.getLayer('sykes_gwathmey_ur')) {
        map.removeLayer('sykes_gwathmey_ur');
      }
    }
  });

  $("#sykes_gwathmey_ll").change(function() {
    let val = $("#sykes_gwathmey_ll").prop("checked");
    console.log(val);
    if (val === true) {
      if (!map.getLayer('sykes_gwathmey_ll')) {
        map.addLayer({
          'id': 'sykes_gwathmey_ll',
          'source': 'sykes_gwathmey_ll',
          'type': 'raster'
        }, 'little2');
      }
    } else {

      if (map.getLayer('sykes_gwathmey_ll')) {
        map.removeLayer('sykes_gwathmey_ll');
      }
    }
  });

  $("#sykes_gwathmey_lr").change(function() {
    let val = $("#sykes_gwathmey_lr").prop("checked");
    console.log(val);
    if (val === true) {
      if (!map.getLayer('sykes_gwathmey_lr')) {
        map.addLayer({
          'id': 'sykes_gwathmey_lr',
          'source': 'sykes_gwathmey_lr',
          'type': 'raster'
        }, 'little2');
      }
    } else {

      if (map.getLayer('sykes_gwathmey_lr')) {
        map.removeLayer('sykes_gwathmey_lr');
      }
    }
  });

  // https://docs.mapbox.com/mapbox-gl-js/example/hover-styles/
  // https://blog.mapbox.com/going-live-with-electoral-maps-a-guide-to-feature-state-b520e91a22d
  // let hoveredStateId;
  let hoveredStateId = null;
  let hoveredStateIds = [];

  map.on('mousemove', 'metes_bounds_lyr', (e) => {

    // console.log(e.features);
    // console.log(e.features[0].id);

    if (e.features.length > 0) {
      // if (hoveredStateId !== null) {
      map.setFeatureState({
        // source: 'composite',
        // sourceLayer: 'little2',
        source: 'metes_bounds_src',
        id: hoveredStateId
      }, {
        hover: false
      });
      // }
      hoveredStateId = e.features[0].id;
      map.setFeatureState({
        // source: 'composite',
        // sourceLayer: 'little2',
        source: 'metes_bounds_src',
        id: hoveredStateId
      }, {
        hover: true
      });
    }
  });

});