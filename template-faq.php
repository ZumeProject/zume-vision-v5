<?php
/*
Template Name: FAQs
*/

get_header(); ?>

<!-- Title Section-->
<div class="grid-x grid-padding-x deep-blue-section padding-vertical-1">
    <div class="cell center">
        <h1 class="center title">Frequently Asked Questions</h1>
    </div>
</div>
<div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>

<main id="post-main" class="main" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile;
    endif; ?>

</main>

<?php get_footer(); ?>
