<?php
/**
 * Loginify Label Section.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


$wp_customize->add_section(
    'loginify_labels_section',
    array(
        'title' => __( 'Labels', 'loginify' ),
        'panel' => 'loginify_panel',
    )
);

$wp_customize->add_setting(
	'loginify[labels_font_size]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 14,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[labels_font_size]',
    array(
        'label'       => __( 'Font Size', 'loginify' ),
        'section'     => 'loginify_labels_section',
        'settings'    => 'loginify[labels_font_size]',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 12,
            'max'  => 32,
            'step' => 1,
        ),
    )
);

$wp_customize->add_setting(
    'loginify[labels_margin]',
    array(
        'default'           => 3,
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    'loginify[labels_margin]',
    array(
        'label'         => __( 'Margin', 'loginify' ),
        'section'       => 'loginify_labels_section',
        'settings'      => 'loginify[labels_margin]',
        'type'          => 'range',
        'input_attrs'   => array(
            'min'    => 0,
            'max'    => 40,
            'step'   => 1,
        ),
    )
);

$wp_customize->add_setting(
	'loginify[labels_color]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '#3c434a',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'loginify[labels_color]',
		array(
			'label'    => __( 'Text Color', 'loginify' ),
			'section'  => 'loginify_labels_section',
			'settings' => 'loginify[labels_color]',
		)
	)
);