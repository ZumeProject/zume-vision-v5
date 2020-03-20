<div id="playbook" class="sidebar small-12 medium-3 large-3 cell" role="complementary">

    <hr class="show-for-small-only" />

    <div class="padding-left-1">
        <?php get_template_part( 'parts/widget', 'sidebar-recent-playbook' ); ?>
    </div>

    <?php if ( ! is_user_logged_in() ) : ?>
        <hr>
        <?php get_template_part( "parts/content", "join" ); ?>
    <?php endif; ?>

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
            dt_write_log( $post_cat );
            $list = [];
            foreach ( $post_cat as $cat ) {
                $list[] = $cat->term_id;
            }
            foreach ( $categories as $category ) {
                echo '<div class="cell">';
                if ( array_search( $category->term_id, $list ) !== false ) {
                    echo '<i class="fi-check"></i>';
                } else {
                    echo '<i class="fi-x"></i>';
                }

                if ( $category->count > 0 ) {
                    echo '<a href="'. esc_url( site_url() ).'/playbook-categories/'.esc_html( $category->slug ).'/">' . esc_html( $category->name ) . '</a>';
                } else {
                    echo esc_html( $category->name );
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
            <strong><?php echo esc_html( $meta['contributor_name'][0] ) ?></strong><br>

            <?php if ( isset( $meta['contributor_website_url'][0] ) ) :  ?>
                <a href="<?php echo esc_url( $meta['contributor_website_url'][0] ) ?>">Website</a><br>
            <?php endif; ?>

            <!-- @todo add contact element that sends them to create a user account and generate a contact email -->
            </div>
        </div>

    <?php endif; ?>

    <hr>
    <div class="padding-left-1">
        <h3>Topics</h3>
        <div class="grid-x padding-left-1">
            <?php
            /** Category List */
            $categories = get_categories( [
                'taxonomy' => 'playbook_topics',
                'hide_empty' => false,
            ]);

            foreach ( $categories as $category ) {
                if ( $category->count > 0 ) {
                    echo '<div class="cell"><a href="'. esc_url( site_url() ).'/playbook-topics/'. esc_url( $category->slug ) . '/">' . esc_html( $category->name ) . '<span class="float-right">(' . esc_attr( $category->count ) . ')</span></a></div>';
                } else {
                    echo '<div class="cell">' . esc_html( $category->name ) . '<span class="float-right">(0)</span></div>';
                }
            }
            ?>
        </div>
    </div>

</div>
