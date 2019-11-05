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

                    <div class="grid-x grid-margin-x grid-padding-x">

                        <div class="cell center-text text-gray">
                            &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>.
                        </div>

                    </div> <!-- end #inner-footer -->

                </footer> <!-- end .footer -->

            </div>  <!-- end .off-canvas-content -->

        </div> <!-- end .off-canvas-wrapper -->

        <?php wp_footer(); ?>

    </body>

</html> <!-- end page -->
