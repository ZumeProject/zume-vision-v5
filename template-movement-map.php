<?php
/*
Template Name: Movement Map
*/
if ( ! class_exists( 'DT_Mapping_Module') ) {
    require_once ( get_template_directory().'/dt-mapping/loader.php' );
    new DT_Mapping_Module_Loader('theme');
}
if ( ! class_exists( 'DT_Mapping_Module' ) ) {
    echo 'Our apologies. Our map is offline. <a href="/">Back to home</a>';
    return;
}

$nonce = wp_create_nonce();
// @todo
// mapbox key
// polygon url
// location-api.php url

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Movement Map</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%; }
    </style>
</head>
<body>

<style>

    .legend {
        background-color: #fff;
        border-radius: 5px;
        bottom: 30px;
        top: 10px;
        box-shadow: 0 1px 2px rgba(0,0,0,0.10);
        font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
        padding: 10px;
        position: absolute;
        right: 10px;
        z-index: 1;
        min-width: 300px;
        max-width: 25%;
        opacity: .8;
    }

    .legend h4 {
        margin: 0 0 10px;
    }

    .legend div span {
        border-radius: 50%;
        display: inline-block;
        height: 10px;
        margin-right: 5px;
        width: 10px;
    }
    .logo {
        background-color: #fff;
        border-radius: 5px;
        top: 10px;
        left: 10px;
        box-shadow: 0 1px 2px rgba(0,0,0,0.10);
        padding: 10px;
        position: absolute;
        z-index: 1;
        opacity: .8;
    }
    .logo-image {
        width: 70px;
        height: 29px;
    }

    /*#target {*/
    /*font-size:5em;*/
    /*font-weight:100;*/
    /*color:grey;*/
    /*opacity: 50%;*/
    /*z-index:1;*/
    /*position:absolute;*/
    /*left:50%;*/
    /*top:50%;*/
    /*}*/

</style>

<div id='map'></div>

<div id="logo" class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/zume-logo.svg" alt="Zume Logo" class="logo-image" /></a></div>

<div id='world-legend' class='legend'>
    <h4>Explorer</h4>
    <hr>
    <div id="data">
        Zoom in and out to view different parts of the map. Click on the map to pull available data for the area you have
        clicked on. Some regions have security protections in place and will not reveal lowest level movement data.
    </div>
</div>
<!--<div id="target">+</div>-->


<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiY2hyaXNjaGFzbSIsImEiOiJjajZyc2poNmEwZTdqMnFuenB0ODI5dWduIn0.6wKrDTf2exQJY-MY7Q1kRQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center: [-98, 38.88],
        minZoom: 0,
        zoom: 0
    });

    var zoomThreshold = 4;

    map.on('load', function() {

        map.addSource('world', {
            type: 'geojson',
            data: 'https://storage.googleapis.com/location-grid-mirror/collection/1.geojson'
        });
        map.addSource('100364199', {
            type: 'geojson',
            data: 'https://storage.googleapis.com/location-grid-mirror/collection/100364199.geojson'
        });
        map.addSource('100364205', {
            type: 'geojson',
            data: 'https://storage.googleapis.com/location-grid-mirror/collection/100364205.geojson'
        });
        map.addLayer({
            "id": '1' + Date.now() + Math.random(),
            "type": "fill",
            "source": 'world',
            'maxzoom': 3.7,
            "paint": {
                "fill-color": "#A25626",
                "fill-opacity": 0.4

            },
            "filter": ["==", "$type", "Polygon"]
        });
        map.addLayer({
            "id": '1' + Date.now() + Math.random(),
            "type": "fill",
            "source": '100364199',
            'minzoom': 3.7,
            'maxzoom': 6.5,
            "paint": {
                "fill-color": "#A25626",
                "fill-opacity": 0.4

            },
            "filter": ["==", "$type", "Polygon"]
        });
        map.addLayer({
            "id": '1' + Date.now() + Math.random(),
            "type": "fill",
            "source": '100364205',
            'minzoom': 6.5,
            "paint": {
                "fill-color": "#A25626",
                "fill-opacity": 0.4

            },
            "filter": ["==", "$type", "Polygon"]
        });

    });
    // document.getElementById('data').innerHTML = 'zoom: ' + map.getZoom() + '<br>center: ' + map.getCenter() + '<br>boundary: ' + map.getBounds()


    let level = 0
    map.on('zoom', function() {
        // world
        if ( map.getZoom() < 3.7 && level !== 0 ) {
            level = 0

            // document.getElementById('data').innerHTML = 'zoom: ' + map.getZoom() + '<br>center: ' + map.getCenter() + '<br>boundary: ' + map.getBounds()

            let bbox = map.getBounds()
            jQuery.get('https://cairo.lovethenile.local/wp-content/themes/disciple-tools-theme/dt-mapping/location-grid-list-api.php',
                {
                    type: 'match_within_bbox',
                    north_latitude: bbox._ne.lat,
                    south_latitude: bbox._sw.lat,
                    west_longitude: bbox._sw.lng,
                    east_longitude: bbox._ne.lng,
                    level: level,
                    nonce: '12345'
                }, null, 'json' ).done(function(data) {
                console.log(data)
            })

        }
        // country
        if ( map.getZoom() >= 3.7 && map.getZoom() < 6.5 && level !== 1 ) {
            level = 1

            // document.getElementById('data').innerHTML = 'zoom: ' + map.getZoom() + '<br>center: ' + map.getCenter() + '<br>boundary: ' + map.getBounds()

            // query which states are within bounding box boundaries

            // loop through grid_id's
            // add sources
            // add layers
            // add grid_id to    list

            let bbox = map.getBounds()
            jQuery.get('https://cairo.lovethenile.local/wp-content/themes/disciple-tools-theme/dt-mapping/location-grid-list-api.php',
                {
                    type: 'match_within_bbox',
                    north_latitude: bbox._ne.lat,
                    south_latitude: bbox._sw.lat,
                    west_longitude: bbox._sw.lng,
                    east_longitude: bbox._ne.lng,
                    level: level,
                    nonce: '12345'
                }, null, 'json' ).done(function(data) {
                console.log(data)
            })



        }
        // state
        if ( map.getZoom() >= 6.5  && level !== 2 ) {
            level = 2

            // document.getElementById('data').innerHTML = 'zoom: ' + map.getZoom() + '<br>center: ' + map.getCenter() + '<br>boundary: ' + map.getBounds()

            let bbox = map.getBounds()
            jQuery.get('https://cairo.lovethenile.local/wp-content/themes/disciple-tools-theme/dt-mapping/location-grid-list-api.php',
                {
                    type: 'match_within_bbox',
                    north_latitude: bbox._ne.lat,
                    south_latitude: bbox._sw.lat,
                    west_longitude: bbox._sw.lng,
                    east_longitude: bbox._ne.lng,
                    level: level,
                    nonce: '12345'
                }, null, 'json' ).done(function(data) {
                console.log(data)
            })

        }
    })

</script>

</body>
</html>
