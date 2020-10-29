<?php 
/**
 * @Packge     : Nonprofit
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'nonprofit_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'nonprofit' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'nonprofit_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'nonprofit' ),
            'panel'    => 'nonprofit_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'nonprofit_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'nonprofit' ),
            'panel'    => 'nonprofit_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'nonprofit_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'nonprofit' ),
            'panel'    => 'nonprofit_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'nonprofit_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'nonprofit' ),
            'panel'    => 'nonprofit_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'nonprofit_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'nonprofit' ),
            'panel'    => 'nonprofit_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'nonprofit_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'nonprofit' ),
            'panel'    => 'nonprofit_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'nonprofit_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'nonprofit' ),
            'panel'    => 'nonprofit_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'nonprofit_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'nonprofit' ),
            'panel'    => 'nonprofit_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>