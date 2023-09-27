const codigosIBGE = await fetch('codigosIBGE.json').then(r => r.json());
const estadosSVG = await fetch('ES.json').then(r => r.json());

function cleanString(string) {
  return string.normalize("NFD").replace(/[\u0300-\u036f]/g, "").split(' ').join('_').toLowerCase();
}

let bounds = L.latLngBounds([-15, -42], [-23, -38]);

const map = L.map('map', {
  center: [-19.5, -40.7],
  zoom: 8,
  minZoom: 7,
  maxZoom: 9,
  maxBounds: bounds
});

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 9,
}).addTo(map);

// fetch('ES.json').then(r => r.json()).then( r => r.features.forEach(e => console.log(e)))


//CRIA OS SVGS NO MAPA ==============================*===================== 
let visibleColor = '#0c96d5',
  notVisibleColor = '#2b5f78';

let allStates = [];
estadosSVG.features?.forEach(estado => {
  let stateArray = [];

  for (let j = 0; j < estado.geometry.coordinates[0].length; j++) {
    stateArray.push([estado.geometry.coordinates[0][j][1], estado.geometry.coordinates[0][j][0]]);
  }

  //SIMULA DENSIDADE DE CNPJs ===========
  function generateDensity(min, max) {
    return Math.random() * (max - min) + min;
  }

  let state = L.polygon(stateArray);
  let codigo = codigosIBGE.filter(item => cleanString(item.nome) == cleanString(estado.properties.NOME));

  if (codigo.length) {
    state.feature = {
      state_code: codigo[0].codigo
    }
  }

  state.feature = {
    ...state.feature,
    density: generateDensity(0.15, 0.8)
  }

  state.setStyle({ fillColor: visibleColor, fillOpacity: state.feature.density, color: '#202020', weight: 1 });
  state.addTo(map).on('click', e => clickCenter(e.target));

  allStates.push(state);
});

// //INTERAÇÃO COM CORES SOBRE VISIBILIDADE DOS ESTADOS =================================================== 
function pullVisibleStates() {
  let bounds = map.getBounds();

  let visibleStates = [];

  allStates.forEach(each => {
    let isInBounds = bounds.contains(each._latlngs);

    if (isInBounds) {
      each.setStyle({ fillColor: visibleColor, fillOpacity: each.feature.density });

      let itemVisivel = allStates.find(estado =>
        estado.feature.nome === estado.feature.nome);

      visibleStates.push(itemVisivel.feature.nome);

    } else {
      each.setStyle({ fillColor: notVisibleColor, fillOpacity: 0.5 });
    }
  });
}

map.on('moveend', function () {
  pullVisibleStates();
});


//EVENTOS DO MAPA =================================================== 
function clickCenter(marker) {
  //centraliza o estado
  let polygonCenter = marker.getBounds().getCenter();
  map.setView(polygonCenter, 9);

  //color highlight
  document.querySelectorAll('path.leaflet-interactive').forEach(each => {
    each.classList.remove('clicked');
  });
  marker._path.classList.add('clicked')

  //busca o estado pelo código (procurando o nome, por enquanto)
  let estadoClicado = codigosIBGE.filter(item => item.codigo == marker.feature.state_code)[0];
}

//MUNICIPIO INICIAL A SER MOSTRADO ===================================================
clickCenter(allStates.filter(estado => estado.feature.state_code == 3200102)[0])