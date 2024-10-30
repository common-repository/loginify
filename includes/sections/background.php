<?php
/**
 * Loginify Background Section.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


$wp_customize->add_section(
    'loginify_background_section',
    array(
        'title' => __( 'Background', 'loginify' ),
        'panel' => 'loginify_panel',
    )
);

$wp_customize->add_setting(
	'loginify[background_color]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '#f1f1f1',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'loginify[background_color]',
		array(
			'label'    => __( 'Background Color', 'loginify' ),
			'section'  => 'loginify_background_section',
			'settings' => 'loginify[background_color]',
		)
	)
);

$wp_customize->add_setting(
	'loginify[background_image]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'loginify[background_image]',
		array(
			'label'    => __( 'Background Image', 'loginify' ),
			'section'  => 'loginify_background_section',
			'settings' => 'loginify[background_image]',
		)
	)
);

$wp_customize->add_setting(
	'loginify[background_repeat]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 'no-repeat',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'loginify[background_repeat]',
	array(
		'type'     => 'select',
		'section'  => 'loginify_background_section',
		'settings' => 'loginify[background_repeat]',
		'label'    => __( 'Background Repeat', 'loginify' ),
		'choices'  => array(
			'no-repeat' => __( 'no-repeat', 'loginify' ),
			'repeat'    => __( 'repeat', 'loginify' ),
			'repeat-x'  => __( 'repeat-x', 'loginify' ),
			'repeat-y'  => __( 'repeat-y', 'loginify' ),
		),
		'active_callback' => 'loginify_background_callback',
	)
);

$wp_customize->add_setting(
	'loginify[background_position]',
	array(
		'default'           => 'no-repeat',
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 'center center',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'loginify[background_position]',
	array(
		'type'     => 'select',
		'section'  => 'loginify_background_section',
		'settings' => 'loginify[background_position]',
		'label'    => __( 'Background Position', 'loginify' ),
		'choices'  => array(
			'left top'      => __( 'left top', 'loginify' ),
			'left center'   => __( 'left center', 'loginify' ),
			'left bottom'   => __( 'left bottom', 'loginify' ),
			'center top'    => __( 'center top', 'loginify' ),
			'center center' => __( 'center center', 'loginify' ),
			'center bottom' => __( 'center bottom', 'loginify' ),
			'right top'     => __( 'right top', 'loginify' ),
			'right center'  => __( 'right center', 'loginify' ),
			'right bottom'  => __( 'right bottom', 'loginify' ),
		),
		'active_callback' => 'loginify_background_callback',
	)
);

$wp_customize->add_setting(
	'loginify[background_size]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 'cover',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'loginify[background_size]',
	array(
		'type'     => 'select',
		'section'  => 'loginify_background_section',
		'settings' => 'loginify[background_size]',
		'label'    => __( 'Background Size', 'loginify' ),
		'choices'  => array(
			'auto'    => __( 'auto', 'loginify' ),
			'cover'   => __( 'cover', 'loginify' ),
			'contain' => __( 'contain', 'loginify' ),
		),
		'active_callback' => 'loginify_background_callback',
	)
);