<?php
/**
 * Loginify Logo Section.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


$wp_customize->add_section(
    'loginify_logo_section',
    array(
        'title' => __( 'Logo', 'loginify' ),
        'panel' => 'loginify_panel',
    )
);

$wp_customize->add_setting(
    'loginify[logo]',
    array(
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'loginify[logo]',
        array(
            'label'     => __( 'Logo', 'loginify' ),
            'section'   => 'loginify_logo_section',
            'settings'  => 'loginify[logo]',
        )
    )
);

$wp_customize->add_setting(
    'loginify[logo_size]',
    array(
        'default'           => 84,
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    'loginify[logo_size]',
    array(
        'label'         => __( 'Logo Size', 'loginify' ),
        'section'       => 'loginify_logo_section',
        'settings'      => 'loginify[logo_size]',
        'type'          => 'range',
        'input_attrs'   => array(
            'min'    => 0,
            'max'    => 200,
            'step'   => 1,
        ),
    )
);

$wp_customize->add_setting(
    'loginify[logo_link]',
    array(
        'default'           => home_url(),
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
    'loginify[logo_link]',
    array(
        'label'         => __( 'Logo URL', 'loginify' ),
        'section'       => 'loginify_logo_section',
        'settings'      => 'loginify[logo_link]',
    )
);

$wp_customize->add_setting(
    'loginify[logo_title]',
    array(
        'default'           => get_bloginfo('name'),
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'loginify[logo_title]',
    array(
        'label'         => __( 'Logo Title', 'loginify' ),
        'section'       => 'loginify_logo_section',
        'settings'      => 'loginify[logo_title]',
    )
);