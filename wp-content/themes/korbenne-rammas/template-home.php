<?php /* Template Name: home */ ?>
<?php get_header(); ?>
<h1>Home</h1>

<div class="container">
    <div class="row">
        <div id='map'></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div id='menu'>
            <input id='streets-v11' type='radio' name='rtoggle' value='streets' checked='checked'>
            <label for='streets'>streets</label>
            <input id='light-v10' type='radio' name='rtoggle' value='light'>
            <label for='light'>light</label>
            <input id='dark-v10' type='radio' name='rtoggle' value='dark'>
            <label for='dark'>dark</label>
            <input id='outdoors-v11' type='radio' name='rtoggle' value='outdoors'>
            <label for='outdoors'>outdoors</label>
            <input id='satellite-v9' type='radio' name='rtoggle' value='satellite'>
            <label for='satellite'>satellite</label>
        </div>
    </div>
</div>

<script>
    // Initialise la map
    mapboxgl.accessToken = 'pk.eyJ1IjoiaG1lZGluaG8iLCJhIjoiY2szaDJieTZyMDdpNjNjcXRjaHU2cjkwdSJ9.--0qzHNFfaujaTjlMCeSjw';
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
        center: [-74.50, 40], // starting position [lng, lat]
        zoom: 9 // starting zoom
    });
    // Ajout de la barre de recherche
    map.addControl(new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
    }));
    // Ajout de la geolocalisation de l'utilisateur
    map.addControl(new mapboxgl.GeolocateControl({
        positionOptions: {
            enableHighAccuracy: true
        },
        trackUserLocation: true
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
</script>