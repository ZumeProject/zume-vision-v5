<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="report" class="sidebar cell" role="complementary">

    <hr class="show-for-small-only" />

    <!-- Description -->
    <div class="padding-horizontal-1 padding-top-1">
        <h3>What are these reports?</h3>
        <p>Progress can be reported through <a href="<?php echo get_post_permalink( 14 )?>">maps</a> and <a href="<?php echo get_post_permalink( 77 )?>">statistics</a>, but also through stories of kingdom wins and faith steps taken. These reports are the stories of the Zúme vision unfolding.</p>
    </div>
    <hr>
    <?php get_template_part( "parts/content", "join" ); ?>

    <hr><!-- Divider -->
    <div class="padding-horizontal-1">
        <h3>Get reports via email</h3>
        <!-- Begin Mailchimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <div id="mc_embed__signup">
            <form action="https://zumeproject.us14.list-manage.com/subscribe/post?u=ccd7c18cc92d558aadc2caefb&amp;id=18abb73d5c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div class="input-group">
                    <input type="email" value="" name="EMAIL" class="required email input-group-field" id="mce-EMAIL" placeholder="Email Address" />
                    <div class="input-group-button">
                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded--subscribe" class="button secondary-button large">
                    </div>
                </div>
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ccd7c18cc92d558aadc2caefb_18abb73d5c" tabindex="-1" value=""></div>
            </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->
    </div>
    <hr>

    <div class="padding-horizontal-1">
        <h3>Sort By</h3>
        <p>By Month<br>
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

        <p>By Category<br>
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

    <hr>

    <!-- Key Reports-->
    <div class="padding-horizontal-1">
        <h3>Special Reports</h3>
        <?php zume_reports_nav() ?>
    </div>

    <hr>

    <!-- Statistics -->
    <div class="padding-horizontal-1">
        <?php get_template_part( 'parts/widget', 'sidebar-progress' ); ?>
    </div>

    <hr>

    <div class="padding-horizontal-1 center">
        <a href="/reports/feed">RSS Feed</a>
    </div>
    <div class="padding-horizontal-1 center">
        <a href="/reports/?format=compact">Compact Format</a>
    </div>



</div>
