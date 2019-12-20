<?php
/**
 * Template Name: Progress
 */
function get_country_data() {
    global $wpdb;
    $results = $wpdb->get_results("SELECT name, population FROM $wpdb->dt_location_grid WHERE level = 0", ARRAY_A );
    if ( $results ) {
        usort( $results, function( $a, $b ){if ($a == $b) { return 0; } return ($a < $b) ? -1 : 1;} );
        return $results;
    } else {
        return [];
    }
}
$country_data = get_country_data();

get_header(); ?>

<div id="content">

    <div id="main" class="cell" role="main">

        <!-- Progress Section-->
        <div class="grid-x grid-padding-x deep-blue-section padding-bottom-0">
            <div class="cell center">
                <h2>Progress</h2>
            </div>
        </div>
        <div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>

        <!-- Hero Stats-->
        <div class="grid-x grid-padding-x white-section">
<!--            <div class="cell small-1"></div>-->

            <div class="cell small-12">

                <div class="grid-x center">
                    <div class="cell small-1"></div>
                    <div class="cell medium-2">
                        <h3>Facts</h3>
                        <hr>
                        <p>World population<br><span class="progress-counter" id="population-count-1">?</span><br></p>
                        <p>Births today<br><span class="progress-counter" id="births-today-count-1">?</span><br></p>
                        <p>Deaths today<br><span class="progress-counter" id="deaths-today-count-1">?</span><br></p>
                        <p>Population growth today<br><span class="progress-counter"
                                                            id="population-growth-today-count-1">?</span><br></p>
                    </div>
                    <div class="cell medium-2">
                        <h3>Crisis</h3>
                        <hr>
                        <p>Christless deaths today<br><span class="progress-counter" id="christless-deaths-today-count-1">?</span></p>
                        <p>Born with no access <br>to the gospel today<br><span class="progress-counter" id="births-among-unreached-today-count-1">?</span></p>
                    </div>
                    <div class="cell medium-2">
                        <img src="<?php echo esc_url( zume_images_uri() )?>vision/jesus-globe.png" alt="welcome-graphic" />
                    </div>
                    <div class="cell medium-2">
                        <h3>Trainings</h3>
                        <hr>
                        <p>Needed<br><span class="progress-counter" id="trainings-needed-count-1">?</span><br></p>
                        <p>Reported<br><span class="progress-counter" id="trainings-reported-count-1">?</span></p>
                    </div>
                    <div class="cell medium-2">
                        <h3>New Churches</h3>
                        <hr>
                        <p>Needed<br>
                            <span class="progress-counter" id="churches-needed-count-1">?</span><br></p>
                        <p>Reported<br>
                            <span class="progress-counter" id="churches-reported-count-1">0</span></p>
                    </div>
                    <div class="cell small-1"></div>
                </div>

            </div>

<!--            <div class="cell small-1"></div>-->
        </div>

        <!-- Country List -->
        <div class="grid-x grid-padding-x deep-blue-section padding-bottom-0">
            <div class="cell center">
                <h2>By Country</h2>
            </div>
        </div>

        <div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>
        <div class="grid-x white-section">

            <div class="cell small-1"></div>

            <div class="cell small-10">

                <table class="hover table-scroll display" id="country-list-table">
                    <thead>
                    <tr>
                        <th>Location</th>
                        <th>Trainings Needed</th>
                        <th>Trainings Reported</th>
                        <th>Churches Needed</th>
                        <th>Churches Reported</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ( ! empty( $country_data ) ) {
                        foreach( $country_data as $country ) {
                            if ( $country['population'] < 1 ) {
                                continue;
                            }
                            $trainings_needed = $country['population'] / 5000;
                            $churches_needed = $country['population'] / 5000 * 2;
                            ?>
                            <tr>
                                <td><strong><?php echo esc_html( $country['name'] ) ?></strong></td>

                                <td><?php echo esc_html( number_format(ceil( $trainings_needed ) ) ) ?></td>
                                <td>0</td>
                                <td><?php echo esc_html( number_format( ceil( $churches_needed ) ) ) ?></td>
                                <td>0</td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>

            <div class="cell small-1"></div>

        </div>
        <script>
            jQuery(document).ready(function() {
                /* Data Tables */
                let isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
                if (isMobile) {
                    jQuery('#country-list-table').DataTable({
                        "paging":   false,
                        "scrollX": true
                    });
                } else {
                    jQuery('#country-list-table').DataTable({
                        "paging":   true,
                        "lengthMenu": [[10, 100, -1], [10, 100, "All"]]
                    });
                }
            })
        </script>

    </div> <!-- end #main -->

</div> <!-- end #content -->

<?php //get_template_part( "parts/content", "fullmodal" ); ?>

<?php get_footer(); ?>
