<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="playbook" class="sidebar small-12 medium-3 large-3 cell" role="complementary">

    <hr class="show-for-small-only" />

    <h3>What is a play?</h3>
    <p>A play is a movement strategy that has worked for others. You can take any of these, tweak them, and run them yourself.</p>

    <hr>

    <h3>Target Audience</h3>
    <div class="grid-x padding-left-1">
        <?php
        /** Category List */
        $categories = get_categories( [
            'taxonomy' => 'playbook_categories',
            'hide_empty' => false,
        ]);

        foreach( $categories as $category ) {
            if ( $category->count > 0 ) {
                echo '<div class="cell"><a href="'. site_url().'/playbook-categories/'.$category->slug.'/">' . $category->name . '<span class="float-right">('.$category->count.')</span></a></div>';
            } else {
                echo '<div class="cell">' . $category->name . '<span class="float-right">(0)</span></div>';
            }
        }
        ?>
    </div>

</div>
