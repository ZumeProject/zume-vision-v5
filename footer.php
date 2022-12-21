<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

                <footer class="footer" role="contentinfo">

                    <?php do_shortcode('[zume_footer_logon_modal]' ); ?>

                    <div class="reveal" id="search-box" data-reveal>
                        <h1>Search</h1>
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url() ) ?>">
                            <div class="input-group large">
                                <input type="search" class="input-group-field search-field" placeholder="Search..." value="" name="s" title="Search for:">
                                <div class="input-group-button">
                                    <input type="submit" class="search-submit button" value="Search">
                                </div>
                            </div>
                            <button class="close-button" data-close aria-label="Close modal" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </form>
                    </div>

                    <div class="grid-x grid-margin-x grid-padding-x">

                        <div class="cell center-text text-gray">
                            &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>
                        </div>

                    </div> <!-- end #inner-footer -->

                </footer> <!-- end .footer -->

            </div>  <!-- end .off-canvas-content -->

        </div> <!-- end .off-canvas-wrapper -->

        <?php wp_footer(); ?>

    </body>

</html> <!-- end page -->
