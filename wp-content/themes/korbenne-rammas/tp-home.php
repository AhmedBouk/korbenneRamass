<?php /* Template Name: home */ ?>

<?php get_header(); ?>

<div id="map-container">

    <div class="leftSide d-flex m-auto">
        <div class="euStats justify-content-center m-auto">
            <div class="card" style="width: 18rem;">
                <div class="card-header">KILOS DE VERRE RECYCLÉ EN FRANCE</div>
                <script type="text/javascript" src="https://www.planetoscope.com/widget.php?id=1307&f=5"></script>
            </div>
        </div>

        <div class="recents d-flex justify-content-center m-5">
            <div class="card" style="width: 18rem;">
                <div class="card-header">MES KORBENNES RÉCENTES</div>
                <ul class="list-group list-group-flush">
            
                </ul>
            </div>
        </div>

        <div class="favorites d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-header">MES KORBENNES FAVORITES</div>
                <ul class="list-group list-group-flush favBen">
           
                </ul>
            </div>
        </div>

        <div class="card m-5 text-left" style="width: 18rem;">
            <div class="card-header">MODIFIER LA CARTE</div>
            <div id='menu'>
                <input id='streets-v11' type='radio' name='rtoggle' value='streets' checked='checked'>
                <label for='streets'>Rues</label></br>
                <input id='light-v10' type='radio' name='rtoggle' value='light'>
                <label for='light'>Thème jour</label></br>
                <input id='dark-v10' type='radio' name='rtoggle' value='dark'>
                <label for='dark'>Thème nuit</label></br>
                <input id='outdoors-v11' type='radio' name='rtoggle' value='outdoors'>
                <label for='outdoors'>Outdoors</label></br>
                <input id='satellite-v9' type='radio' name='rtoggle' value='satellite'>
                <label for='satellite'>Vue Satellite</label>
            </div>
        </div>

    </div>
    <div id='map'"></div>
</div>
<script>
   
   function httpGet(theUrl)
    {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
        xmlHttp.send( null );
        return xmlHttp.responseText;
    }

    var geojson = JSON.parse(httpGet("http://localhost:8000/dumpster/list"));

    // console.log(geojson);
    // Initialise la map
    mapboxgl.accessToken = 'pk.eyJ1IjoiaG1lZGluaG8iLCJhIjoiY2szaDJieTZyMDdpNjNjcXRjaHU2cjkwdSJ9.--0qzHNFfaujaTjlMCeSjw';
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
        center: [3.8833, 43.6], // starting position [lng, lat]
        zoom: 9 // starting zoom
    });

    
    // Ajout de la barre de recherche
    map.addControl(new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        marker: {
            color: 'orange'
        },
        mapboxgl: mapboxgl,
    }));

    // Ajout de la geolocalisation de l'utilisateur
    map.addControl(new mapboxgl.GeolocateControl({
        positionOptions: {
            enableHighAccuracy: true
        },
        trackUserLocation: true,

    }));

    // changer le style de la carte
    var layerList = document.getElementById('menu');
    var inputs = layerList.getElementsByTagName('input');
    function switchLayer(layer) {
        var layerId = layer.target.id;
        map.setStyle('mapbox://styles/mapbox/' + layerId);
    }
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].onclick = switchLayer;
    }
    // ajout d'icon sur montpellier
   
    // add markers to map
    geojson.features.forEach(function(marker) {
        console.log(marker);
        // create a DOM element for the marker
        var el = document.createElement('div');
        el.setAttribute("id", "mykorb");
        el.className = 'marker';
        el.style.backgroundImage = 'url(wp-content/themes/korbenne-rammas/assets/img/bottles.png)';
        el.style.width = '24px';
        el.style.height = '40px';
      

// add marker to map

        new mapboxgl.Marker(el)
            .setLngLat(marker.geometry.coordinates)
            .setPopup(new mapboxgl.Popup({
                    offset: 25
                })
                // add popups
                .setHTML('<p class="info">Adresse : </p> <p class="infoMarker">' + marker.properties.rue + ' </p> <p class="info">Type de Benne :</p> <p class="infoMarker">' + marker.properties.type  ))
                .addTo(map);
               
    });
    // Direction
    map.addControl(
       direction = new MapboxDirections({
            accessToken: mapboxgl.accessToken,
            interactive: true,
            language: 'fr',
            unit: 'metric',
            placeholderOrigin : "De : "  ,
            placeholderDestination :'À : '
     
        }),
        'bottom-left'
    );

// recuperer la geolocalisation autamiquement 
// var options = {
//   enableHighAccuracy: true,
//   timeout: 5000,
//   maximumAge: 0
// };

// function success(pos) {
//   var crd = pos.coords;
//   console.log(crd.latitude);
//   console.log('Votre position actuelle est :');
//   console.log(`Latitude : ${crd.latitude}`);
//   console.log(`Longitude : ${crd.longitude}`);
//   console.log(`La précision est de ${crd.accuracy} mètres.`);
// }

// function error(err) {
//   console.warn(`ERREUR (${err.code}): ${err.message}`);
// }

// navigator.geolocation.getCurrentPosition(success, error, options);


</script>

<?php get_footer();

