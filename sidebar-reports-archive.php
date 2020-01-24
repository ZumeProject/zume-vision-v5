<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="report" class="sidebar cell" role="complementary">

    <hr class="show-for-small-only" />

    <!-- Description -->
    <div class="padding-horizontal-1">
        <h3>What are these reports?</h3>
        <p>Progress can be reported through <a href="<?php echo get_post_permalink( 14 )?>">maps</a> and <a href="<?php echo get_post_permalink( 77 )?>">statistics</a>, but also through stories of kingdom wins and faith steps taken. These reports are the stories of the Zúme vision unfolding.</p>
    </div>

    <hr><!-- Divider -->

    <!-- Key Reports-->
    <div class="padding-horizontal-1">
        <h3>Key Reports</h3>
        <?php zume_reports_nav() ?>
    </div>

    <hr><!-- Divider -->

    <!-- Progress -->
    <div class="padding-horizontal-1">
        <?php get_template_part( 'parts/widget', 'sidebar-progress' ); ?>
    </div>

    <hr><!-- Divider -->

    <div class="padding-horizontal-1">

        <p>Archives<br>
        <select onchange="window.location = jQuery(this).val()">
            <option></option>
            <?php wp_get_archives([
                'type' => 'monthly',
                'show_post_count' => true,
                'post_type' => 'reports',
                'format' => 'option'
            ]) ?>
        </select>
        </p>

        <p>Categories<br>
            <select onchange="window.location = jQuery(this).val()">
                <option></option>
                <?php
                $categories = get_categories([
                    'hide_empty' => true,
                    'taxonomy' => 'report_categories',
                ]);
                foreach ( $categories as $category ) {

                    echo '<option value="'.site_url().'/report-categories/'. $category->slug.'">' . $category->name . '</option>';
                }
                ?>
            </select>
        </p>

    </div>





</div>
