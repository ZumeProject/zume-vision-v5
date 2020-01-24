<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
$post = get_post();
?>

<article id="post-<?php the_ID(); ?>" role="article">
    <div class="grid-x grid-padding-x article-section highlight-background border-bottom padding-top-1" data-post-id="<?php the_ID(); ?>">
        <div class="cell medium-3"><span class="small-text"><?php echo get_the_date() ?></span></div>
        <div class="cell medium-9"></div>
        <div class="cell medium-3 center padding-1">
            <img src="https://via.placeholder.com/200" class="hide-for-small-only" alt="<?php the_title(); ?>" />
            <img src="https://via.placeholder.com/100" class="show-for-small-only" alt="<?php the_title(); ?>" />
        </div>
        <div class="cell medium-9">
            <header class="article-header">
                <h3><?php the_title(); ?></h3>
            </header> <!-- end article header -->

            <section class="entry-content reports-content" itemprop="text">
                    <?php the_content(); ?>
            </section> <!-- end article section -->

                <?php
                $categories = wp_get_object_terms( $post->ID, 'report_categories' );

                if ( ! empty( $categories) ) {
                    echo '<footer class="article-footer padding-bottom-1">Categories: ';

                    $i = 0;
                    foreach ( $categories as $category ) {
                        if ( $i > 0 ) {
                            echo ', ';
                        }
                        echo '<a href="'.site_url().'/report-categories/'.$category->slug.'">'. $category->name . '</a>';
                        $i++;
                    }
                    echo '</footer> <!-- end article footer -->';
                }
                ?>

        </div>
    </div>
</article> <!-- end article -->
