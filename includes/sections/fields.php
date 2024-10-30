<?php
/**
 * Loginify Fields Section.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


$wp_customize->add_section(
    'loginify_fields_section',
    array(
        'title' => __( 'Fields', 'loginify' ),
        'panel' => 'loginify_panel',
    )
);

$wp_customize->add_setting(
	'loginify[fields_font_size]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 24,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[fields_font_size]',
    array(
        'label'       => __( 'Font Size', 'loginify' ),
        'section'     => 'loginify_fields_section',
        'settings'    => 'loginify[fields_font_size]',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 100,
            'step' => 1,
        ),
    )
);

$wp_customize->add_setting(
	'loginify[fields_text_color]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '#2c3338',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'loginify[fields_text_color]',
		array(
			'label'    => __( 'Text Color', 'loginify' ),
			'section'  => 'loginify_fields_section',
			'settings' => 'loginify[fields_text_color]',
		)
	)
);

$wp_customize->add_setting(
	'loginify[fields_bg_color]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '#ffffff',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'loginify[fields_bg_color]',
		array(
			'label'    => __( 'Background Color', 'loginify' ),
			'section'  => 'loginify_fields_section',
			'settings' => 'loginify[fields_bg_color]',
		)
	)
);

$wp_customize->add_setting(
	'loginify[fields_height]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 50,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[fields_height]',
    array(
        'label'       => __( 'Height', 'loginify' ),
        'section'     => 'loginify_fields_section',
        'settings'    => 'loginify[fields_height]',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 20,
            'max'  => 80,
            'step' => 1,
        ),
    )
);

$wp_customize->add_setting(
	'loginify[fields_padding]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 10,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[fields_padding]',
    array(
        'label'       => __( 'Padding', 'loginify' ),
        'section'     => 'loginify_fields_section',
        'settings'    => 'loginify[fields_padding]',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ),
    )
);

$wp_customize->add_setting(
	'loginify[fields_margin]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 16,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[fields_margin]',
    array(
        'label'       => __( 'Margin', 'loginify' ),
        'section'     => 'loginify_fields_section',
        'settings'    => 'loginify[fields_margin]',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ),
    )
);

$wp_customize->add_setting(
	'loginify[fields_border_color]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '#8c8f94',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'loginify[fields_border_color]',
		array(
			'label'    => __( 'Border Color', 'loginify' ),
			'section'  => 'loginify_fields_section',
			'settings' => 'loginify[fields_border_color]',
		)
	)
);

$wp_customize->add_setting(
	'loginify[fields_border_width]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 2,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[fields_border_width]',
    array(
        'label'       => __( 'Border Width', 'loginify' ),
        'section'     => 'loginify_fields_section',
        'settings'    => 'loginify[fields_border_width]',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 10,
            'step' => 1,
        ),
    )
);

$wp_customize->add_setting(
	'loginify[fields_border_radius]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 4,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[fields_border_radius]',
    array(
        'label'       => __( 'Border Radius', 'loginify' ),
        'section'     => 'loginify_fields_section',
        'settings'    => 'loginify[fields_border_radius]',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 50,
            'step' => 1,
        ),
    )
);
