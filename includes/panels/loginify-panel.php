<?php
/**
 * Loginify Panel.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


$wp_customize->add_panel(
    'loginify_panel',
    array(
        'priority'       => 30,
        'capability'     => 'edit_theme_options',
        'title'          => __( 'Loginify: Login Customizer', 'loginify' ),
        'description'    => __( 'Say goodbye to generic login pages and hello to a seamless, branded login experience with Loginify.', 'loginify' ),
    )
);
