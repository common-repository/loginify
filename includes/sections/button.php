<?php
/**
 * Loginify Background Section.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


$wp_customize->add_section(
    'loginify_button_section',
    array(
        'title' => __( 'Button', 'loginify' ),
        'panel' => 'loginify_panel',
    )
);

$wp_customize->add_setting(
	'loginify[button_width]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 68,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[button_width]',
    array(
        'label'       => __( 'Width', 'loginify' ),
        'section'     => 'loginify_button_section',
        'settings'    => 'loginify[button_width]',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 68,
            'max'  => 130,
            'step' => 1,
        ),
    )
);

$wp_customize->add_setting(
	'loginify[button_height]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 40,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[button_height]',
    array(
        'label'       => __( 'Height', 'loginify' ),
        'section'     => 'loginify_button_section',
        'settings'    => 'loginify[button_height]',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 40,
            'max'  => 60,
            'step' => 1,
        ),
    )
);

$wp_customize->add_setting(
	'loginify[button_border_radius]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 3,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'loginify[button_border_radius]',
		array(
			'label'       => __( 'Border Radius', 'loginify' ),
			'section'     => 'loginify_button_section',
			'settings'    => 'loginify[button_border_radius]',
			'type'        => 'range',
			'input_attrs' => array(
				'min'  => 0,
				'max'  => 60,
				'step' => 1,
			),
		)
	)
);

$wp_customize->add_setting(
	'loginify[button_text_color]',
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
		'loginify[button_text_color]',
		array(
			'label'    => __( 'Text Color', 'loginify' ),
			'section'  => 'loginify_button_section',
			'settings' => 'loginify[button_text_color]',
		)
	)
);

$wp_customize->add_setting(
	'loginify[button_text_color_hover]',
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
		'loginify[button_text_color_hover]',
		array(
			'label'    => __( 'Text Color (Hover)', 'loginify' ),
			'section'  => 'loginify_button_section',
			'settings' => 'loginify[button_text_color_hover]',
		)
	)
);

$wp_customize->add_setting(
	'loginify[button_bg_color]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '#2271b1',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'loginify[button_bg_color]',
		array(
			'label'    => __( 'Background Color', 'loginify' ),
			'section'  => 'loginify_button_section',
			'settings' => 'loginify[button_bg_color]',
		)
	)
);

$wp_customize->add_setting(
	'loginify[button_bg_color_hover]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '#135e96',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'loginify[button_bg_color_hover]',
		array(
			'label'    => __( 'Background Color (Hover)', 'loginify' ),
			'section'  => 'loginify_button_section',
			'settings' => 'loginify[button_bg_color_hover]',
		)
	)
);
