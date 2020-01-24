<div id="playbook" class="sidebar small-12 medium-3 large-3 cell" role="complementary">

    <hr class="show-for-small-only" />

    <div class="padding-left-1">
        <?php get_template_part( 'parts/widget', 'sidebar-recent-playbook' ); ?>
    </div>

    <hr><!-- divider -->

    <div class="padding-left-1">
        <h3>Target Audience</h3>
        <div class="grid-x padding-left-1">
            <?php
            /** Category List */
            $categories = get_categories( [
                'taxonomy' => 'playbook_categories',
                'hide_empty' => false,
            ]);
            global $post;
            $post_cat = wp_get_object_terms( $post->ID, 'playbook_categories' );
            $list = [];
            foreach( $post_cat as $cat ) {
                $list[] = $cat->term_id;
            }
            foreach( $categories as $category ) {
                echo '<div class="cell">';
                if ( array_search( $category->term_id, $list ) ) {
                    echo '<i class="fi-check"></i>';
                } else {
                    echo '<i class="fi-x"></i>';
                }

                if ( $category->count > 0 ) {
                    echo '<a href="'. site_url().'/playbook-categories/'.$category->slug.'/">' . $category->name . '</a>';
                } else {
                    echo $category->name ;
                }
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Contributor section -->
    <?php $meta = get_post_meta( $post->ID );
    if ( isset( $meta['contributor_name'][0] ) ) : ?>

        <hr><!-- divider -->

        <div class="padding-left-1">
            <h3>Play Provided By</h3>

            <div class="padding-left-1">
            <strong><?php echo esc_html($meta['contributor_name'][0]) ?></strong><br>

            <?php if ( isset( $meta['contributor_website_url'][0] ) ) :  ?>
                <a href="<?php echo esc_url( $meta['contributor_website_url'][0] ) ?>">Website</a><br>
            <?php endif; ?>

            <!-- @todo add contact element that sends them to create a user account and generate a contact email -->
            </div>
        </div>

    <?php endif; ?>

</div>
