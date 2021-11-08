<?php get_header(); ?>

<!-- Title Section-->
<div class="grid-x grid-padding-x deep-blue-section padding-vertical-1">
    <div class="cell center">
        <h1 class="center title">Podcast</h1>
        <h3>Zúme - Multiplying Disciples Podcast</h3>
    </div>
</div>
<div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>

<!-- Bread Crumbs-->
<nav id="post-nav" class="padding-bottom-1">
    <div class="breadcrumb hide-for-small-only">
        <a href="<?php echo esc_url( home_url() ); ?>" rel="nofollow">Home</a>&nbsp;&nbsp;&#187;&nbsp;&nbsp;
        <a href="<?php echo esc_url( home_url() ); ?>/multiplying-disciples-podcast/">Podcasts</a>&nbsp;&nbsp;&#187;&nbsp;&nbsp;
        <?php echo esc_html( the_title() ) ?>
    </div>
    <div class="breadcrumb-mobile show-for-small-only"><a href="<?php echo esc_url( home_url() ); ?>/multiplying-disciples-podcast/">Podcasts</a></div>
</nav>

<!-- Main -->
<main role="main" id="post-main">

    <div class="grid-x grid-margin-x">

        <div class="blog cell large-8">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part( 'parts/loop', 'single' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( 'parts/content', 'missing' ); ?>

            <?php endif; ?>

        </div>

        <div class="sidebar cell large-4">

            <?php get_sidebar( 'podcast' ); ?>

        </div>

    </div>

</main> <!-- end #main -->

<?php get_footer(); ?>
