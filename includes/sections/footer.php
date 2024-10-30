<?php
/**
 * Loginify Footer Section.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


$wp_customize->add_section(
    'loginify_footer_section',
    array(
        'title' => __( 'Form Footer', 'loginify' ),
        'panel' => 'loginify_panel',
    )
);

$wp_customize->add_setting(
	'loginify[footer_link_color]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '#50575e',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'loginify[footer_link_color]',
		array(
			'label'    => __( 'Link Color', 'loginify' ),
			'section'  => 'loginify_footer_section',
			'settings' => 'loginify[footer_link_color]',
		)
	)
);

$wp_customize->add_setting(
	'loginify[footer_link_color_hover]',
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
		'loginify[footer_link_color_hover]',
		array(
			'label'    => __( 'Link Color (Hover)', 'loginify' ),
			'section'  => 'loginify_footer_section',
			'settings' => 'loginify[footer_link_color_hover]',
		)
	)
);

$wp_customize->add_setting(
	'loginify[remove_register_lostpass_link]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[remove_register_lostpass_link]',
    array(
        'label'    => __( 'Remove "Register | Lost your password?" link', 'loginify' ),
        'type'     => 'checkbox',
        'section'  => 'loginify_footer_section',
        'settings' => 'loginify[remove_register_lostpass_link]',
    )
);

$wp_customize->add_setting(
	'loginify[remove_back_to_site_link]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[remove_back_to_site_link]',
    array(
        'label'    => __( 'Remove "Back to website" link', 'loginify' ),
        'type'     => 'checkbox',
        'section'  => 'loginify_footer_section',
        'settings' => 'loginify[remove_back_to_site_link]',
    )
);


$wp_customize->add_setting(
	'loginify[remove_lang_switcher]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => '',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
    'loginify[remove_lang_switcher]',
    array(
        'label'    => __( 'Remove language switcher', 'loginify' ),
        'type'     => 'checkbox',
        'section'  => 'loginify_footer_section',
        'settings' => 'loginify[remove_lang_switcher]',
    )
);