<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Nonprofit
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Header background image oparation

$page_title   = ! empty( nonprofit_meta( 'page_title' ) ) ? wp_kses_post( nonprofit_meta( 'page_title' ) ) : '';
$headerimg    = get_header_image();
?>

<section class="hero-banner zigzag_bg_2" <?php echo nonprofit_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="breadcrumb_tittle">
                <h2>
                    <?php
                    if ( is_category() ) {
                        single_cat_title( __('Category: ', 'nonprofit') );

                    } elseif ( is_tag() ) {
                        single_tag_title( __('Tag Archive for - ', 'nonprofit') );

                    } elseif ( is_archive() ) {
                        echo get_the_archive_title();

                    } elseif ( is_page() ) {
                        echo $page_title ? $page_title : get_the_title();

                    } elseif ( is_search() ) {
                        echo esc_html__( 'Search for: ', 'nonprofit' ) . get_search_query();

                    } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                        echo $page_title ? $page_title : get_the_title();

                    } elseif ( is_home() ) {
                        echo esc_html__( 'Blog', 'nonprofit' );

                    } elseif ( is_404() ) {
                        echo esc_html__( '404 error', 'nonprofit' );

                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</section>