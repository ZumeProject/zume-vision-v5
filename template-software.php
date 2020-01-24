<?php
/**
 * Template Name: Tracking Software
 */

get_header(); ?>

<div id="content" style="height:2000px">

    <div class="gradient-wrapper-reverse" style="height:600px; z-index: 1;">

        <div class="grid-x grid-padding-y white">
            <div class="cell medium-1"></div>
            <div class="cell medium-10">
                <div class="grid-x center">
                    <div class="cell padding-vertical-2">
                        <img src="<?php echo esc_url( zume_images_uri( 'vision' ) )?>dt-logo-white@2x.png" alt="disciple tools" style="max-width:400px"/>
                    </div>
                    <div class="cell">
                        <h3 class="white">A software for disciple making movements</h3>
                        <p class="large-text">Partnering to power Zúme.Vision</p>
                        <p><a href="https://disciple.tools" class="button secondary-button large">Demo @ www.Disciple.Tools</a></p>
                        <div>
                            <img src="<?php echo esc_url( zume_images_uri( 'vision' ) )?>laptop5.png" alt="laptop" style="max-width:800px" />
                        </div>
                    </div>

                </div>
            </div>
            <div class="cell medium-1"></div>
        </div>

    </div>

    <div class="grid-x grid-padding-y" style="margin-top:250px;">
        <div class="cell medium-3"></div>

        <div class="cell medium-6">
            <p class="large-text">As a contact relationship management system, Disciple Tools is:</p>
            <div class="padding-horizontal-2">
                <ul>
                    <li><strong>Unique</strong> – able to track and organize individuals or groups generationally.</li>
                    <li><strong>Insightful</strong> – giving end-to-end dashboards, charts, and maps on contacts, baptisms, groups, churches,
                        and movements.</li>
                    <li><strong>Secure</strong> – restricting database access based on permission levels and specific assignments.</li>
                    <li><strong>Federated</strong> – designed to host how and where you want and inter-link instances as desired.</li>
                    <li><strong>Scalable</strong> – relevant for individuals, groups, or movements</li>
                    <li><strong>Customizable</strong> – highly adaptable through settings, built-in modifications, external plugins, and
                        requiring low-tech skills.</li>
                    <li><strong>Multilingual</strong> – translatable, facilitating cross-cultural collaboration.</li>
                </ul>
            </div>
            <div class="center"><a href="https://disciple.tools" class="button secondary-button large">Demo @ www.Disciple.Tools</a></div>
        </div>

        <div class="cell medium-3"></div>

        <div class="cell medium-1 large-2"></div>
        <div class="cell medium-10 large-8">
            <div class="orbit" role="region" aria-label="Disciple Tools Screens" data-orbit>
                <div class="orbit-wrapper">
                    <div class="orbit-controls">
                        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    </div>
                    <ul class="orbit-container">
                        <li class="is-active orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="<?php echo esc_url( zume_images_uri( 'vision' ) )?>dt-screen-dashboard.png" alt="Space">
                                <figcaption class="orbit-caption">Disciple Maker (Multiplier) Dashboard</figcaption>
                            </figure>
                        </li>
                        <li class="orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="<?php echo esc_url( zume_images_uri( 'vision' ) )?>dt-screen-clist.png" alt="Space">
                                <figcaption class="orbit-caption">Contacts List</figcaption>
                            </figure>
                        </li>
                        <li class="orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="<?php echo esc_url( zume_images_uri( 'vision' ) )?>dt-screen-cdetails.png" alt="Space">
                                <figcaption class="orbit-caption">Contact Details</figcaption>
                            </figure>
                        </li>
                        <li class="orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="<?php echo esc_url( zume_images_uri( 'vision' ) )?>dt-screen-glist.png" alt="Space">
                                <figcaption class="orbit-caption">Groups List</figcaption>
                            </figure>
                        </li>
                        <li class="orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="<?php echo esc_url( zume_images_uri( 'vision' ) )?>dt-screen-gdetails.png" alt="Space">
                                <figcaption class="orbit-caption">Groups Details</figcaption>
                            </figure>
                        </li>
                        <li class="orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="<?php echo esc_url( zume_images_uri( 'vision' ) )?>dt-screen-metrics.png" alt="Space">
                                <figcaption class="orbit-caption">Metrics : Critical Path</figcaption>
                            </figure>
                        </li>
                        <li class="orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="<?php echo esc_url( zume_images_uri( 'vision' ) )?>dt-screen-generations.png" alt="Space">
                                <figcaption class="orbit-caption">Metrics : Generational Mapping</figcaption>
                            </figure>
                        </li>
                        <li class="orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="<?php echo esc_url( zume_images_uri( 'vision' ) )?>dt-screen-mappinggulpd.png" alt="Space">
                                <figcaption class="orbit-caption">Metrics : Saturation Mapping & Activity</figcaption>
                            </figure>
                        </li>
                        <li class="orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="<?php echo esc_url( zume_images_uri( 'vision' ) )?>dt-screen-netdash.png" alt="Space">
                                <figcaption class="orbit-caption">(Optional) Network Dashboard</figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <nav class="orbit-bullets">
                    <button class="is-active" data-slide="0">
                        <span class="show-for-sr">First slide details.</span>
                        <span class="show-for-sr" data-slide-active-label>Current Slide</span>
                    </button>
                    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                    <button data-slide="4"><span class="show-for-sr">Fifth slide details.</span></button>
                    <button data-slide="5"><span class="show-for-sr">Sixth slide details.</span></button>
                    <button data-slide="6"><span class="show-for-sr">Seventh slide details.</span></button>
                    <button data-slide="7"><span class="show-for-sr">Eighth slide details.</span></button>
                </nav>
            </div>

            <div class="cell center">
                <p class="large-text">Collaboratively multiplying disciples and churches generationally</p>
            </div>

        </div>
        <div class="cell medium-1 large-2"></div>
    </div>

</div> <!-- end #content -->
<br><br><br><br><br><br><br><br>

<?php get_footer(); ?>
