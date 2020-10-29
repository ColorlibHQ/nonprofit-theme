<?php 
/**
 * @Packge     : Nonprofit
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'nonprofit_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'nonprofit' ),
        'description' => esc_html__( 'Select the theme color.', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_general_section',
        'default'     => '#a70000',
    )
);

// Header donate button label
Epsilon_Customizer::add_field(
    'nonprofit_header_donate_btn_txt',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Donate Button Label', 'nonprofit' ),
        'section'     => 'nonprofit_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Donate Now', 'nonprofit' ),
    )
);

// Header donate button url
Epsilon_Customizer::add_field(
    'nonprofit_header_donate_btn_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Donate Button URL', 'nonprofit' ),
        'section'     => 'nonprofit_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( '#', 'nonprofit' ),
    )
);

// Header donate button color
Epsilon_Customizer::add_field(
    'nonprofit_donate_btn_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Donate Button Color', 'nonprofit' ),
        'description' => esc_html__( 'Select the color.', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_header_section',
        'default'     => '#ffffff',
    )
);

// Header donate button hover bg color
Epsilon_Customizer::add_field(
    'nonprofit_donate_btn_hvr_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Donate Button Hover Bg Color', 'nonprofit' ),
        'description' => esc_html__( 'Select the color.', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_header_section',
        'default'     => '#ffffff',
    )
);

// Header donate button hover color
Epsilon_Customizer::add_field(
    'nonprofit_donate_btn_hvr_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Donate Button Hover Color', 'nonprofit' ),
        'description' => esc_html__( 'Select the color.', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_header_section',
        'default'     => '#450000',
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'nonprofit' ),
        'section'     => 'nonprofit_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'nonprofit_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'nonprofit' ),
        'description' => esc_html__( 'Select the header background color.', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_header_section',
        'default'     => '#450000',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'nonprofit_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'nonprofit_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_header_section',
        'default'     => '#a70000',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'nonprofit_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_header_section',
        'default'     => '#000000',
    )
);

// Dropdown menu hover color field
Epsilon_Customizer::add_field(
    'nonprofit_dropdown_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_header_section',
        'default'     => '#a70000',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'nonprofit_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'nonprofit' ),
        'description' => esc_html__( 'Set post excerpt length.', 'nonprofit' ),
        'section'     => 'nonprofit_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'nonprofit_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'nonprofit' ),
        'section'     => 'nonprofit_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'nonprofit_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'nonprofit' ),
        'section'     => 'nonprofit_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'nonprofit_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'nonprofit' ),
        'section'     => 'nonprofit_blog_section',
        'default'     => true
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'nonprofit_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'nonprofit' ),
        'section'           => 'nonprofit_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'nonprofit_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'nonprofit' ),
        'section'           => 'nonprofit_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'nonprofit_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'nonprofit_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_fof_section',
        'default'     => '#656565',
    )
);


/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'nonprofit' ),
        'section'     => 'nonprofit_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'nonprofit_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'nonprofit' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'nonprofit' ),
        'section'     => 'nonprofit_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'nonprofit_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'nonprofit' ),
        'section'     => 'nonprofit_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'nonprofit' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'nonprofit_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'nonprofit' ),
        'section'     => 'nonprofit_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);


// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'nonprofit_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profiles Profile Show/Hide', 'nonprofit' ),
        'section'     => 'nonprofit_social_section',
        'default'     => true,
    )
);

//Social Profile links
Epsilon_Customizer::add_field(
	'nonprofit_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'nonprofit_social_section',
		'label'        => esc_html__( 'Social Profile Links', 'nonprofit' ),
        'button_label' => esc_html__( 'Add new social link', 'nonprofit' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'nonprofit' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'nonprofit' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'nonprofit' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
            [
                'social_link_title' => esc_html__( 'Dribbble', 'nonprofit' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-dribbble',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'nonprofit' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'nonprofit' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'nonprofit' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook',
			),
			
		),
	)
);

// Footer widget bg color field
Epsilon_Customizer::add_field(
    'nonprofit_footer_widget_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Bg Color', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_footer_section',
        'default'     => '#450000',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'nonprofit_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'nonprofit_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_footer_section',
        'default'     => '#bababa',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'nonprofit_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_footer_section',
        'default'     => '#bababa',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'nonprofit_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'nonprofit' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'nonprofit_footer_section',
        'default'     => '#a70000',
    )
);

