<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'nonprofit_preloader', 'nonprofit_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'nonprofit_header', 'nonprofit_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'nonprofit_footer', 'nonprofit_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'nonprofit_wrp_start', 'nonprofit_wrp_start_cb', 10 );
	add_action( 'nonprofit_wrp_end', 'nonprofit_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'nonprofit_blog_col_start', 'nonprofit_blog_col_start_cb', 10 );
	add_action( 'nonprofit_blog_col_end', 'nonprofit_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'nonprofit_blog_posts_thumb', 'nonprofit_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'nonprofit_blog_details_wrap_start', 'nonprofit_blog_details_wrap_start_cb', 10 );
	add_action( 'nonprofit_blog_details_wrap_end', 'nonprofit_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'nonprofit_blog_posts_title', 'nonprofit_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'nonprofit_blog_posts_meta', 'nonprofit_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'nonprofit_blog_posts_excerpt', 'nonprofit_blog_posts_excerpt_cb', 10 );
	// add_action( 'nonprofit_blog_posts_excerpt', 'nonprofit_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'nonprofit_blog_posts_info_link', 'nonprofit_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'nonprofit_blog_posts_content', 'nonprofit_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'nonprofit_blog_posts_share', 'nonprofit_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'nonprofit_blog_sidebar', 'nonprofit_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'nonprofit_blog_single_meta', 'nonprofit_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'nonprofit_page_content', 'nonprofit_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'nonprofit_fof', 'nonprofit_fof_cb', 10 );

	

?>