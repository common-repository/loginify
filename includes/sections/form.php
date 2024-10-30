<?php
/**
 * Loginify Form Section.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


$wp_customize->add_section(
    'loginify_form_section',
    array(
        'title' => __( 'Form', 'loginify' ),
        'panel' => 'loginify_panel',
    )
);

$wp_customize->add_setting(
    'loginify[form_bg_color]',
    array(
        'default'           => '#FFFFFF',
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'loginify[form_bg_color]',
        array(
            'label'     => __( 'Background Color', 'loginify' ),
            'section'   => 'loginify_form_section',
            'settings'  => 'loginify[form_bg_color]',
        )
    )
);

$wp_customize->add_setting(
    'loginify[form_width]',
    array(
        'default'           => 320,
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    'loginify[form_width]',
    array(
        'label'         => __( 'Width', 'loginify' ),
        'section'       => 'loginify_form_section',
        'settings'      => 'loginify[form_width]',
        'type'          => 'range',
        'input_attrs'   => array(
            'min'    => 320,
            'max'    => 960,
            'step'   => 1,
        ),
    )
);

$wp_customize->add_setting(
    'loginify[form_height]',
    array(
        'default'           => 266,
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    'loginify[form_height]',
    array(
        'label'         => __( 'Height', 'loginify' ),
        'section'       => 'loginify_form_section',
        'settings'      => 'loginify[form_height]',
        'type'          => 'range',
        'input_attrs'   => array(
            'min'    => 266,
            'max'    => 500,
            'step'   => 1,
        ),
        'active_callback' => 'loginify_templates_callback',
    )
);

$wp_customize->add_setting(
    'loginify[form_margin]',
    array(
        'default'           => 20,
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    'loginify[form_margin]',
    array(
        'label'         => __( 'Margin', 'loginify' ),
        'section'       => 'loginify_form_section',
        'settings'      => 'loginify[form_margin]',
        'type'          => 'range',
        'input_attrs'   => array(
            'min'    => 10,
            'max'    => 100,
            'step'   => 1,
        ),
    )
);

$wp_customize->add_setting(
    'loginify[form_padding]',
    array(
        'default'           => 24,
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    'loginify[form_padding]',
    array(
        'label'         => __( 'Padding', 'loginify' ),
        'section'       => 'loginify_form_section',
        'settings'      => 'loginify[form_padding]',
        'type'          => 'range',
        'input_attrs'   => array(
            'min'    => 12,
            'max'    => 200,
            'step'   => 1,
        ),
    )
);

$wp_customize->add_setting(
    'loginify[form_border]',
    array(
        'default'           => 1,
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    'loginify[form_border]',
    array(
        'label'         => __( 'Border', 'loginify' ),
        'section'       => 'loginify_form_section',
        'settings'      => 'loginify[form_border]',
        'type'          => 'range',
        'input_attrs'   => array(
            'min'    => 0,
            'max'    => 10,
            'step'   => 1,
        ),
    )
);

$wp_customize->add_setting(
    'loginify[form_border_color]',
    array(
        'default'           => '#c3c4c7',
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'loginify[form_border_color]',
        array(
            'label'     => __( 'Border Color', 'loginify' ),
            'section'   => 'loginify_form_section',
            'settings'  => 'loginify[form_border_color]',
        )
    )
);

$wp_customize->add_setting(
    'loginify[form_border_radius]',
    array(
        'default'           => 0,
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    'loginify[form_border_radius]',
    array(
        'label'         => __( 'Border Radius', 'loginify' ),
        'section'       => 'loginify_form_section',
        'settings'      => 'loginify[form_border_radius]',
        'type'          => 'range',
        'input_attrs'   => array(
            'min'    => 0,
            'max'    => 100,
            'step'   => 1,
        ),
        'active_callback' => 'loginify_templates_callback',
    )
);