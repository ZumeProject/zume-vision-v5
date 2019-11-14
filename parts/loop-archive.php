<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>


<article id="post-<?php the_ID(); ?>" role="article">
    <div class="grid-x grid-padding-x grid-padding-y article-section highlight-background border-bottom padding-top-1" data-post-id="<?php the_ID(); ?>">
        <div class="cell medium-2">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail() ?></a>
        </div>
        <div class="cell medium-10">
            <header class="article-header">
                <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            </header> <!-- end article header -->

            <section class="entry-content" itemprop="text">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <?php echo wp_kses_post( wp_trim_words( get_the_content( ), 20 ) ); ?>
                </a>
            </section> <!-- end article section -->

            <footer class="article-footer padding-top-1">
                <p class="tags small-text"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'zume' ) . '</span> ', ', ', '' ); ?> | <?php echo get_the_date() ?></p>
            </footer> <!-- end article footer -->
        </div>
    </div>
</article> <!-- end article -->
