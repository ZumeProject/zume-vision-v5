<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

<!-- Progress Section-->
<div class="grid-x grid-padding-x deep-blue-section padding-vertical-2">
    <div class="cell center">
        <h2 class="center">Podcasts</h2>
    </div>
</div>
<div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>

<div class="content white-section">

    <div class="inner-content grid-x grid-margin-x grid-padding-x padding-vertical-1">

        <div class="cell medium-1"></div>

        <main class="main small-12 medium-10 large-10 cell" role="main">

            <div class="grid-x grid-margin-x">

                <div class="cell ">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php
                        $post = get_post();
                        ?>

                        <article id="post-<?php the_ID(); ?>" role="article">
                            <div class="grid-x grid-padding-x grid-padding-y article-section highlight-background border-bottom padding-top-1" data-post-id="<?php the_ID(); ?>">
                                <?php if ( has_post_thumbnail( $post->ID ) ) : ?>
                                <div class="cell medium-2 hide-for-small-only">
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail() ?></a>
                                </div>
                                <div class="cell medium-10">
                                    <?php else : ?>
                                    <div class="cell"><!-- full width without image-->
                                        <?php endif; ?>

                                        <header class="article-header">
                                            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                        </header> <!-- end article header -->

                                        <section class="entry-content" itemprop="text">
                                            <?php the_excerpt(); ?>
                                        </section> <!-- end article section -->

                                        <footer class="article-footer">
                                        </footer> <!-- end article footer -->
                                    </div>
                                </div>
                        </article> <!-- end article -->

                    <?php endwhile; ?>

                        <?php zume_page_navi(); ?>

                    <?php else : ?>

                        <?php get_template_part( 'parts/content', 'missing' ); ?>

                    <?php endif; ?>
                </div>

            </div>

        </main> <!-- end #main -->

        <div class="cell medium-1"></div>

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
