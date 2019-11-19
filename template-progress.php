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
        <div class="grid-x grid-padding-x deep-blue-section">
            <div class="cell center">
                <h2>Progress</h2>
                <h3>Our progress towards the goal.</h3>
            </div>
        </div>
        <div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>

        <!-- Hero Stats-->
        <div class="grid-x white-section">

            <div class="cell small-1"></div>

            <div class="cell small-10">

                <div class="grid-x center ">
                    <div class="cell medium-4 callout"><h3>World Population</h3><br><span class="home-counter">7,743,697,839</span></div>
                    <div class="cell medium-4 callout"><h3>Trainings</h3><br>Needed<br><span class="home-counter">1,548,739</span><br>Reported<br><span class="home-counter">0</span></div>
                    <div class="cell medium-4 callout"><h3>New Churches</h3><br>Needed<br><span class="home-counter">3,097,479</span><br>Reported<br><span class="home-counter">0</span></div>
                </div>

            </div>

            <div class="cell small-1"></div>
        </div>

        <!-- Country List -->
        <div class="grid-x grid-padding-x deep-blue-section">
            <div class="cell center"></div>
        </div>
        <div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>
        <div class="grid-x white-section">

            <div class="cell small-1"></div>

            <div class="cell small-10">
                <h2></h2>
                <table class="hover table-scroll display" id="country-list-table">
                    <thead>
                    <tr>
                        <th>Location</th>
                        <th>Population</th>
                        <th>Trainings<br>Needed/Reported</th>
                        <th>Churches<br>Needed/Reported</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ( ! empty( $country_data ) ) {
                        foreach( $country_data as $country ) {
                            $trainings_needed = $country['population'] / 5000;
                            $churches_needed = $country['population'] / 5000 * 2;
                            ?>
                            <tr>
                                <td><strong><?php echo esc_html( $country['name'] ) ?></strong></td>
                                <td><?php echo esc_html( number_format($country['population'] ) ) ?></td>
                                <td><?php echo esc_html( number_format(ceil( $trainings_needed ) ) ) ?> / 0</td>
                                <td><?php echo esc_html( number_format( ceil( $churches_needed ) ) ) ?> / 0</td>
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
