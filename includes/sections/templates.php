<?php
/**
 * Loginify Templates Section.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


$wp_customize->add_section(
    'loginify_templates_section',
    array(
        'title' => __( 'Templates', 'loginify' ),
        'panel' => 'loginify_panel',
    )
);

$wp_customize->add_setting(
	'loginify[templates]',
	array(
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'default'           => 'default',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( new Loginify_Image_Radio_Control( 
	$wp_customize, 
	'loginify[templates]',
	array(
		'section'  => 'loginify_templates_section',
		'settings' => 'loginify[templates]',
		'label'    => __( 'Templates', 'loginify' ),
		'choices'  => array(
			'default'   	=> LOGINIFY_URL . '/assets/img/template-default.jpg',
			'left-form'    	=> LOGINIFY_URL . '/assets/img/template-left-form.jpg',
			'right-form'  	=> LOGINIFY_URL . '/assets/img/template-right-form.jpg',
		),
	)
));
