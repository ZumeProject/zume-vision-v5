<!-- By default, this menu will use off-canvas for small
     and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">

    <div class="" style="display: flex; flex-direction: row; justify-content: space-around; width:100%">

        <!-- Show for large -->
        <div class="menu-item" id="nav-logo">
            <ul class="menu">
                <li class="zume-logo-in-top-bar">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/zume-vision-logo.svg"
                             class="zume-logo-in-top-bar">
                    </a>
                </li>
            </ul>
        </div>
        <div id="zume-main-menu" class="menu-item show-for-large">
            <?php zume_top_nav(); ?>
        </div>
        <!-- End show for large -->

        <!-- Show for all screens -->
        <div class="menu-item" id="lang-menu"></div>
        <!-- End show for all -->

        <!-- Show for small/med -->
        <div class=" show-for-small hide-for-large">
            <ul class="menu float-right" id="nav-menu">
                <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
                <li><a data-toggle="off-canvas"><?php esc_html_e( 'Menu', 'zume' ); ?></a></li>
            </ul>
        </div>
        <!-- End show for small/med -->
    </div>
</div>
