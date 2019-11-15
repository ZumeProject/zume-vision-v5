<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <header class="article-header center">
        <?php if ( has_post_thumbnail( ) ) : ?>
        <div class="padding-top-1"><?php the_post_thumbnail(); ?></div>
        <?php endif; ?>
        <h2 class="entry-title single-title vertical-padding" itemprop="headline"><?php the_title(); ?></h2>
    </header> <!-- end article header -->

    <section class="entry-content" itemprop="text">
        <?php the_content(); ?>
    </section> <!-- end article section -->

    <footer class="article-footer">
        <p><?php echo get_the_date() ?></p>
        <p class="tags">
            <?php
            $terms = get_the_terms( get_the_ID(), 'playbook_tag' );
dt_write_log($terms);
            if ( $terms && ! is_wp_error( $terms ) ) :

            $links = array();

            foreach ( $terms as $term ) {
                ?>
                <a href="<?php echo site_url() . '/playbook_tag/' . $term->slug ?>"><?php echo esc_html( $term->name ) ?></a>
            <?php

            }
            ?>

        <?php endif; ?>

    </footer> <!-- end article footer -->

</article> <!-- end article -->
