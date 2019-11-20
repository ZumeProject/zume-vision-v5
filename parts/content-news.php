<!-- News Widget-->
<div class="grid-x grid-margin-x grid-padding-x">

    <div class="cell small-1"></div>

    <div class="small-10 cell">

        <div class="inner-content grid-x grid-margin-x grid-padding-x">
            <div class="cell">
                <h2 class="center padding-bottom-2">Reports</h2>
                <div class="grid-x">
                    <?php
                    $the_query = new WP_Query('posts_per_page=6');
                    while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                        <div class="cell medium-2 card margin-horizontal-1">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('200'); ?></a>
                            <?php endif; ?>
                            <div class="card-section">
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="cell center">
                <a href="/reports" class="button primary-button-hollow large">View Reports</a>
            </div>
        </div>
    </div> <!-- end #main -->

    <div class="cell small-1"></div>

</div> <!-- end #inner-content -->
