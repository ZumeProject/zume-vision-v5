<?php
/**
 * Template Name: Maps - Last 100
 */

get_header(); ?>
<div id="chart"></div>
<script>
    jQuery(document).ready(function($) {
        // console.log(dt_mapbox_metrics)
        function write_all_points( ) {
            let obj = window.dt_mapbox_metrics

            window.post_type = obj.settings.post_type
            let title = obj.settings.title


            let chart = jQuery('#chart')
            window.spinner = ' <span class="loading-spinner active"></span> '

            /* build status list */
            let status_list = `<option value="none" disabled></option>
                      <option value="none" disabled>${_.escape( obj.translations.status ) /*Status*/}</option>
                      <option value="none"></option>
                      <option value="all" selected>${_.escape( obj.translations.status_all  )/*Status - All*/}</option>
                      <option value="none" disabled>-----</option>
                      `
            jQuery.each(status, function(i,v){
                status_list += `<option value="${_.escape( i )}">${_.escape( v.label )}</option>`
            })
            status_list += `<option value="none"></option>`

            chart.empty().html(`
                <style>
                    #map-wrapper {
                        height: ${window.innerHeight - 100}px !important;
                    }
                    #map {
                        height: ${window.innerHeight - 100}px !important;
                    }
                    #geocode-details {
                        height: ${window.innerHeight - 250}px !important;
                        overflow: scroll;
                        opacity: 100%;
                    }
                    .accordion {
                        list-style-type:none;
                    }
                    .delete-button {
                        margin-bottom: 0 !important;
                    }
                    .add-user-button {
                        padding-top: 10px;
                    }
                </style>
                <div id="map-wrapper">
                    <div id='map'></div>
                </div>
             `)

            mapboxgl.accessToken = obj.settings.map_key;
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/light-v10',
                center: [-98, 38.88],
                minZoom: 1,
                zoom: 3
            });

            // disable map rotation using right click + drag
            map.dragRotate.disable();

            // disable map rotation using touch rotation gesture
            map.touchZoomRotate.disableRotation();

            // load sources
            map.on('load', function () {
                let spinner = jQuery('#spinner')
                spinner.show()

                makeRequest('POST', obj.settings.points_rest_url, { post_type: window.post_type, status: null }, obj.settings.points_rest_base_url )
                    .then(points => {
                        load_layer( points )
                    })
            })

            function load_layer( points ) {

                var mapLayer = map.getLayer('pointsLayer');
                if(typeof mapLayer !== 'undefined') {
                    map.removeLayer( 'pointsLayer' )
                }
                var mapSource= map.getSource('pointsSource');
                if(typeof mapSource !== 'undefined') {
                    map.removeSource( 'pointsSource' )
                }

                map.addSource('pointsSource', {
                    'type': 'geojson',
                    'data': points
                });
                map.addLayer({
                    id: 'pointsLayer',
                    type: 'circle',
                    source: 'pointsSource',
                    'paint': {
                        'circle-radius': {
                            'base': 5,
                            'stops': [
                                [12, 10],
                                [22, 180]
                            ]
                        },
                        'circle-color': [
                            'match',
                            ['get', 'action'],
                            'registered',
                            '#fbb03b',
                            'leading_2',
                            '#e55e5e',
                            'leading_3',
                            '#e55e5e',
                            'leading_4',
                            '#e55e5e',
                            'leading_5',
                            '#e55e5e',
                            'leading_6',
                            '#e55e5e',
                            'leading_7',
                            '#e55e5e',
                            'leading_8',
                            '#e55e5e',
                            'leading_9',
                            '#e55e5e',
                            'leading_10',
                            '#e55e5e',
                            'started_group',
                            '#3bb2d0',
                            'studied_1',
                            '#3bb2d0',
                            'studied_2',
                            '#3bb2d0',
                            'studied_3',
                            '#3bb2d0',
                            'studied_4',
                            '#3bb2d0',
                            'studied_5',
                            '#3bb2d0',
                            'studied_6',
                            '#3bb2d0',
                            'studied_7',
                            '#3bb2d0',
                            'studied_8',
                            '#3bb2d0',
                            'studied_9',
                            '#3bb2d0',
                            'studied_10',
                            '#3bb2d0',
                            'studied_11',
                            '#3bb2d0',
                            'studied_12',
                            '#3bb2d0',
                            'studied_13',
                            '#3bb2d0',
                            'studied_14',
                            '#3bb2d0',
                            'studied_15',
                            '#3bb2d0',
                            'studied_16',
                            '#3bb2d0',
                            'studied_17',
                            '#3bb2d0',
                            'studied_18',
                            '#3bb2d0',
                            'studied_19',
                            '#3bb2d0',
                            'studied_20',
                            '#3bb2d0',
                            'studied_21',
                            '#3bb2d0',
                            'studied_22',
                            '#3bb2d0',
                            'studied_23',
                            '#3bb2d0',
                            'studied_24',
                            '#3bb2d0',
                            'studied_25',
                            '#3bb2d0',
                            'studied_26',
                            '#3bb2d0',
                            'studied_27',
                            '#3bb2d0',
                            'studied_28',
                            '#3bb2d0',
                            'studied_29',
                            '#3bb2d0',
                            'studied_30',
                            '#3bb2d0',
                            'studied_31',
                            '#3bb2d0',
                            /* other */ '#223b53'
                        ]
                    }
                });

                map.on('mouseenter', 'pointsLayer', function () {
                    map.getCanvas().style.cursor = 'pointer';
                });
                map.on('mouseleave', 'pointsLayer', function () {
                    map.getCanvas().style.cursor = '';
                });

                // @link https://docs.mapbox.com/mapbox-gl-js/example/popup-on-hover/
                var popup = new mapboxgl.Popup({
                    closeButton: false,
                    closeOnClick: false
                });

                map.on('mouseenter', 'pointsLayer', function(e) {
                    map.getCanvas().style.cursor = 'pointer';

                    var coordinates = e.features[0].geometry.coordinates.slice();
                    var description = e.features[0].properties.note;

                    while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                        coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                    }

                    popup
                        .setLngLat(coordinates)
                        .setHTML(description)
                        .addTo(map);
                });

                map.on('mouseleave', 'pointsLayer', function() {
                    map.getCanvas().style.cursor = '';
                    popup.remove();
                });

                let spinner = jQuery('#spinner')
                spinner.hide()
            }


        }
        write_all_points( )
    })

</script>


<?php get_footer(); ?>
