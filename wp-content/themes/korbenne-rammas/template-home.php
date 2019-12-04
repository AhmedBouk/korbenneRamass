<?php /* Template Name: home */ ?>
<?php get_header(); ?>
<h1>Home</h1>


<div id='map'></div>
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
</script>