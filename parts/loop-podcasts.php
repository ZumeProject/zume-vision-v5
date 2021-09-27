<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <header class="article-header">

        <?php if ( has_post_thumbnail() ) : ?>
            <div style="width:100%;
                height: 200px;
                background-color:#00aeff;
                background-image: url(<?php the_post_thumbnail_url() ?>);
                background-size: cover;
                background-repeat: no-repeat;"></div>
        <?php endif; ?>
        <h2 class="entry-title single-title vertical-padding" itemprop="headline"><?php the_title(); ?></h2>
        <hr>
    </header> <!-- end article header -->

    <section class="entry-content" itemprop="text">

        <?php the_content(); ?>

    </section> <!-- end article section -->

    <footer class="article-footer">
        <hr>
        <p><?php echo get_the_date() ?></p>

    </footer> <!-- end article footer -->

</article> <!-- end article -->
