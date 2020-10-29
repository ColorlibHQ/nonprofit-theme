<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'NONPROFIT_DIR_URI' ) ) {
	define( 'NONPROFIT_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'NONPROFIT_DIR_ASSETS_URI' ) ) {
	define( 'NONPROFIT_DIR_ASSETS_URI', NONPROFIT_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'NONPROFIT_DIR_CSS_URI' ) ) {
	define( 'NONPROFIT_DIR_CSS_URI', NONPROFIT_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'NONPROFIT_DIR_JS_URI' ) ) {
	define( 'NONPROFIT_DIR_JS_URI', NONPROFIT_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'NONPROFIT_DIR_IMGS_URI' ) ) {
	define( 'NONPROFIT_DIR_IMGS_URI', NONPROFIT_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'NONPROFIT_DIR_ICON_IMG_URI' ) ) {
	define( 'NONPROFIT_DIR_ICON_IMG_URI', NONPROFIT_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'NONPROFIT_DIR_PATH' ) ) {
	define( 'NONPROFIT_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'NONPROFIT_DIR_PATH_INC' ) ) {
	define( 'NONPROFIT_DIR_PATH_INC', NONPROFIT_DIR_PATH . 'inc/' );
}

//Nonprofit Libraries Folder Directory
if ( ! defined( 'NONPROFIT_DIR_PATH_LIBS' ) ) {
	define( 'NONPROFIT_DIR_PATH_LIBS', NONPROFIT_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'NONPROFIT_DIR_PATH_CLASSES' ) ) {
	define( 'NONPROFIT_DIR_PATH_CLASSES', NONPROFIT_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'NONPROFIT_DIR_PATH_HOOKS' ) ) {
	define( 'NONPROFIT_DIR_PATH_HOOKS', NONPROFIT_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function nonprofit_admin_script(){
    wp_enqueue_style( 'nonprofit-admin', get_template_directory_uri().'/assets/css/nonprofit-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'nonprofit_admin', get_template_directory_uri().'/assets/js/nonprofit-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'nonprofit_admin_script' );



/**
 * Include File
 *
 */
require_once( NONPROFIT_DIR_PATH_INC . 'nonprofit-breadcrumbs.php' );
require_once( NONPROFIT_DIR_PATH_INC . 'nonprofit-widgets-reg.php' );
require_once( NONPROFIT_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( NONPROFIT_DIR_PATH_INC . 'post-like.php' );
require_once( NONPROFIT_DIR_PATH_INC . 'nonprofit-functions.php' );
require_once( NONPROFIT_DIR_PATH_INC . 'nonprofit-commoncss.php' );
require_once( NONPROFIT_DIR_PATH_INC . 'support-functions.php' );
require_once( NONPROFIT_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( NONPROFIT_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( NONPROFIT_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( NONPROFIT_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( NONPROFIT_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( NONPROFIT_DIR_PATH_HOOKS . 'hooks.php' );
require_once( NONPROFIT_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( NONPROFIT_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( NONPROFIT_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Nonprofit object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Nonprofit = new Nonprofit();