<?php
$seo_sidebar_links = get_option( 'seo_links' );
if ( empty( $seo_sidebar_links ) ) {
    return;
}
?>
<hr>
<h3><a href="/articles">Popular Articles</a></h3>
<ul class="recent-articles">
<?php
foreach ( $seo_sidebar_links as $seo_link ) {
    echo '<li><a href="' . esc_attr( esc_url( $seo_link['url'] ) ) . '">' . esc_attr( $seo_link['anchor'] )  . '</a></li>';
}
?>
</ul>