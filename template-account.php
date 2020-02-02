<?php
/**
 * Template Name: Account
 */

get_header(); ?>

<!-- Title Section-->
<div class="grid-x grid-padding-x deep-blue-section padding-vertical-1">
    <div class="cell center" style="cursor:pointer;" onclick="window.location = '<?php site_url() ?>/account'">
        <h1 class="center">My Account</h1>
    </div>
</div>
<div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>

<main id="post-main" class="main" role="main">
    <div class="grid-x">
        <div class="cell center">
            <h1>My Account</h1>
            <hr>

        </div>
    </div>


</main> <!-- end #main -->

<?php get_template_part( "parts/content", "fullmodal" ); ?>

<?php get_footer(); ?>
