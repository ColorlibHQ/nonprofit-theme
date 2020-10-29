<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Nonprofit
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$nonprofit_instagram_userid      	= !empty( nonprofit_opt( 'nonprofit_instagram_userid' ) ) ? nonprofit_opt( 'nonprofit_instagram_userid' ) : 'colorlib';
	$nonprofit_instagram_gallery_item = !empty( nonprofit_opt( 'nonprofit_instagram_gallery_item' ) ) ? nonprofit_opt( 'nonprofit_instagram_gallery_item' ) : '5';
	?>
	
    <!-- instragram_area_start -->
    <div class="instragram_area" data-username="<?php echo esc_attr( $nonprofit_instagram_userid )?>" data-items="<?php echo esc_attr( $nonprofit_instagram_gallery_item )?>"></div>
    <!-- instragram_area_end -->