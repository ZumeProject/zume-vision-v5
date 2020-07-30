<?php
/**
 * Template Name: Maps v2
 */

get_header(); ?>
<!-- Title Section-->
<div class="grid-x grid-padding-x deep-blue-section padding-vertical-1">
    <div class="cell center">
        <h1 class="center title">Maps</h1>
    </div>
</div>
<div id="map-dashboard" class="content">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell medium-3">
                <ul class="vertical tabs" data-tabs id="maps-tabs">
                    <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Trainings</a></li>
<!--                    <li class="tabs-title"><a href="#panel2v">Coaching</a></li>-->
<!--                    <li class="tabs-title"><a href="#panel3v">Churches</a></li>-->
                </ul>
            </div>
            <div class="cell medium-9">
                <div class="tabs-content vertical" data-tabs-content="maps-tabs">
                    <div class="tabs-panel is-active" id="panel1v">
                        <div class="grid-x grid-padding-x" data-equalizer>
                            <div class="cell medium-4 large-3" onclick="open_full_modal('training-100hours')">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Last 100 Hours</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This map show the last 100 hours of Zúme Training activity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-panel" id="panel2v">
                        <div class="grid-x grid-padding-x" data-equalizer>
                            <div class="cell medium-4 large-3" onclick="open_full_modal()">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Area Map</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This card makes use of the card-divider element.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell medium-4 large-3" onclick="open_full_modal()">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Cluster Map</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This card makes use of the card-divider element.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell medium-4 large-3" onclick="open_full_modal()">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Points Map</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This card makes use of the card-divider element.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell medium-4 large-3" onclick="open_full_modal()">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Points Map</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This card makes use of the card-divider element.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell medium-4 large-3" onclick="open_full_modal()">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Points Map</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This card makes use of the card-divider element.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tabs-panel" id="panel3v">
                        <div class="grid-x grid-padding-x" data-equalizer>
                            <div class="cell medium-4 large-3" onclick="open_full_modal()">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Area Map</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This card makes use of the card-divider element.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell medium-4 large-3" onclick="open_full_modal()">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Cluster Map</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This card makes use of the card-divider element.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell medium-4 large-3" onclick="open_full_modal()">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Points Map</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This card makes use of the card-divider element.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell medium-4 large-3" onclick="open_full_modal()">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Points Map</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This card makes use of the card-divider element.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell medium-4 large-3" onclick="open_full_modal()">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Points Map</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This card makes use of the card-divider element.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell medium-4 large-3" onclick="open_full_modal()">
                                <div class="card" data-equalizer-watch >
                                    <div class="card-divider">
                                        <h4>Points Map</h4>
                                    </div>
                                    <img src="https://via.placeholder.com/300x150" width="100%" />
                                    <div class="card-section">
                                        <p>This card makes use of the card-divider element.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- end #content -->
<script>
    function open_full_modal( hash ) {
        jQuery('#fullmodal-content').empty().append(`${hash}`)
        jQuery('#fullmodal').foundation('open');
    }
    jQuery(document).ready(function(){
        let hash = window.location.hash

        if ( hash ) {
            console.log(hash)
            open_full_modal( hash )
        }
    })
</script>

<?php get_template_part( "parts/content", "join" ); ?>
<?php get_template_part( "parts/content", "fullmodal" ); ?>

<?php get_footer(); ?>
