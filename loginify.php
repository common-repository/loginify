<?php
/**
 * Plugin Name:       Loginify
 * Plugin URI:        https://loginify.pro
 * Description:       Say goodbye to generic login pages and hello to a seamless, branded login experience with Loginify.
 * Version:           1.0
 * Author:            Abdul Roqib
 * License:           GPL-2.0+
 * Text Domain:       loginify
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

define( 'LOGINIFY_VERSION', '1.0' );
define( 'LOGINIFY_DIR', plugin_dir_path( __FILE__ ) );
define( 'LOGINIFY_URL', plugin_dir_url( __FILE__ ) );

add_action( 'admin_menu', 'loginify_menu' );

add_action( 'customize_register', 'loginify_register' );
add_action( 'wp', 'loginify_set_page' );
add_action( 'login_head', 'loginify_css');
add_action( 'customize_preview_init', 'loginify_live_preview' );
add_action( 'customize_controls_enqueue_scripts', 'loginify_controls' );

add_filter( 'login_headerurl', 'loginify_logo_url' );
add_filter( 'login_headertext', 'loginify_logo_title' );

function loginify_menu() {
	add_menu_page(
		__( 'Loginify: Login Customizer', 'loginify' ),
		'Loginify',
		'manage_options',
		admin_url('/customize.php?autofocus[panel]=loginify_panel'),
		'',
		'dashicons-admin-customizer',
		61
	);
}

function loginify_register( $wp_customize ) {
    
    include LOGINIFY_DIR . '/includes/controls/active-callbacks.php';
    include LOGINIFY_DIR . '/includes/controls/image-radio.php';
    include LOGINIFY_DIR . '/includes/panels/loginify-panel.php';
    include LOGINIFY_DIR . '/includes/sections/templates.php';
    include LOGINIFY_DIR . '/includes/sections/logo.php';
    include LOGINIFY_DIR . '/includes/sections/background.php';
    include LOGINIFY_DIR . '/includes/sections/labels.php';
    include LOGINIFY_DIR . '/includes/sections/fields.php';
    include LOGINIFY_DIR . '/includes/sections/button.php';
    include LOGINIFY_DIR . '/includes/sections/form.php';
    include LOGINIFY_DIR . '/includes/sections/footer.php';

}

function loginify_set_page() {
    if ( !is_404() ) {
        return;
    }

    $pagename = sanitize_text_field( get_query_var( 'pagename' ) );

    if ( empty($pagename) ) {
        global $wp;
        $pagename = $wp->request;
    }

    if ( $pagename != 'loginify-by-abdul-roqib') {
        return;
    }

    if ( !is_user_logged_in() || !current_user_can( 'manage_options' ) ) {
        wp_safe_redirect( home_url() );
        exit;
    }

    status_header( 200 );
    load_template( LOGINIFY_DIR . '/templates/loginify-page.php', true );
    exit;
}

function loginify_css() {
    include LOGINIFY_DIR . '/includes/styles/loginify-style.php';
}

function loginify_live_preview() {
	wp_enqueue_script( 
        'loginify-live-preview',
        LOGINIFY_URL . 'assets/js/live-preview.js',
        array( 'jquery','customize-preview' ),
        LOGINIFY_VERSION,
        true
	);
}

function loginify_controls() {
	wp_enqueue_script( 
        'loginify-controls',
        LOGINIFY_URL . 'assets/js/controls.js',
        array( 'jquery','customize-preview' ),
        LOGINIFY_VERSION,
        true
	);
}

function loginify_logo_url() {  
    $loginify = get_option( 'loginify', array() );
    return $loginify['logo_link'] ? $loginify['logo_link'] : home_url();
}

function loginify_logo_title() { 
    $loginify = get_option( 'loginify', array() );
    return $loginify['logo_title'] ? $loginify['logo_title'] : get_bloginfo('name');
}