<?php
/**
 * Loginify Style.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

$loginify = get_option( 'loginify', array() );

// templates section settings
$templates = isset( $loginify['templates'] ) ? $loginify['templates'] : 'default';

// logo section settings
$logo = isset( $loginify['logo'] ) ? $loginify['logo'] : '';
$logo_size = isset( $loginify['logo_size'] ) ? $loginify['logo_size'] : '';
$logo_link = isset( $loginify['logo_link'] ) ? $loginify['logo_link'] : '';
$logo_title = isset( $loginify['logo_title'] ) ? $loginify['logo_title'] : '';

// background section settings
$background_color = isset( $loginify['background_color'] ) ? $loginify['background_color'] : '';
$background_image = isset( $loginify['background_image'] ) ? $loginify['background_image'] : '';
$background_repeat = isset( $loginify['background_repeat'] ) ? $loginify['background_repeat'] : '';
$background_position = isset( $loginify['background_position'] ) ? $loginify['background_position'] : '';
$background_size = isset( $loginify['background_size'] ) ? $loginify['background_size'] : '';

// labels section settings
$labels_font_size = isset( $loginify['labels_font_size'] ) ? $loginify['labels_font_size'] : '';
$labels_margin = isset( $loginify['labels_margin'] ) ? $loginify['labels_margin'] : '';
$labels_color = isset( $loginify['labels_color'] ) ? $loginify['labels_color'] : '';

// fields section settings
$fields_font_size = isset( $loginify['fields_font_size'] ) ? $loginify['fields_font_size'] : '';
$fields_text_color = isset( $loginify['fields_text_color'] ) ? $loginify['fields_text_color'] : '';
$fields_bg_color = isset( $loginify['fields_bg_color'] ) ? $loginify['fields_bg_color'] : '';
$fields_height = isset( $loginify['fields_height'] ) ? $loginify['fields_height'] : '';
$fields_padding = isset( $loginify['fields_padding'] ) ? $loginify['fields_padding'] : '';
$fields_margin = isset( $loginify['fields_margin'] ) ? $loginify['fields_margin'] : '';
$fields_border_color = isset( $loginify['fields_border_color'] ) ? $loginify['fields_border_color'] : '';
$fields_border_width = isset( $loginify['fields_border_width'] ) ? $loginify['fields_border_width'] : '';
$fields_border_radius = isset( $loginify['fields_border_radius'] ) ? $loginify['fields_border_radius'] : '';

// button section settings
$button_width = isset( $loginify['button_width'] ) ? $loginify['button_width'] : '';
$button_height = isset( $loginify['button_height'] ) ? $loginify['button_height'] : '';
$button_border_radius = isset( $loginify['button_border_radius'] ) ? $loginify['button_border_radius'] : '';
$button_text_color = isset( $loginify['button_text_color'] ) ? $loginify['button_text_color'] : '';
$button_text_color_hover = isset( $loginify['button_text_color_hover'] ) ? $loginify['button_text_color_hover'] : '';
$button_bg_color = isset( $loginify['button_bg_color'] ) ? $loginify['button_bg_color'] : '';
$button_bg_color_hover = isset( $loginify['button_bg_color_hover'] ) ? $loginify['button_bg_color_hover'] : '';

// form section settings
$form_bg_color = isset( $loginify['form_bg_color'] ) ? $loginify['form_bg_color'] : '';
$form_width = isset( $loginify['form_width'] ) ? $loginify['form_width'] : '';
$form_height = isset( $loginify['form_height'] ) ? $loginify['form_height'] : '';
$form_margin = isset( $loginify['form_margin'] ) ? $loginify['form_margin'] : '';
$form_padding = isset( $loginify['form_padding'] ) ? $loginify['form_padding'] : '';
$form_border = isset( $loginify['form_border'] ) ? $loginify['form_border'] : '';
$form_border_color = isset( $loginify['form_border_color'] ) ? $loginify['form_border_color'] : '';
$form_border_radius = isset( $loginify['form_border_radius'] ) ? $loginify['form_border_radius'] : '';

// footer section settings
$footer_link_color = isset( $loginify['footer_link_color'] ) ? $loginify['footer_link_color'] : '';
$footer_link_color_hover = isset( $loginify['footer_link_color_hover'] ) ? $loginify['footer_link_color_hover'] : '';
$remove_register_lostpass_link = isset( $loginify['remove_register_lostpass_link'] ) ? $loginify['remove_register_lostpass_link'] : '';
$remove_back_to_site_link = isset( $loginify['remove_back_to_site_link'] ) ? $loginify['remove_back_to_site_link'] : '';
$remove_lang_switcher = isset( $loginify['remove_lang_switcher'] ) ? $loginify['remove_lang_switcher'] : '';

?>

<style>
body.login {
	<?php if ( $templates != 'default') : ?>
		display: flex;
	<?php endif; ?>
	<?php if ( $background_color ) : ?>
		background-color: <?php echo esc_attr( $background_color ); ?>;
	<?php endif; ?>
	<?php if ( $background_image ) : ?>
		background-image: url('<?php echo esc_attr( $background_image ); ?>');
		background-repeat: <?php echo esc_attr( $background_repeat ); ?>;
		background-position: <?php echo esc_attr( $background_position ); ?>;
		background-size: <?php echo esc_attr( $background_size ); ?>;
	<?php endif; ?>
}

.login h1 a {
	<?php if ( $logo_size ) : ?>
		width: unset;
		height: 84px;
		background-repeat: no-repeat;
		background-position: center bottom;
		background-size: auto <?php echo esc_attr( $logo_size ); ?>px;
	<?php endif; ?>
	<?php if ( $logo ) : ?>
		background-image: url(<?php echo esc_url( $logo ); ?>);
	<?php endif; ?>
}

#loginform label {
	<?php if ( $labels_color ) : ?>
		color: <?php echo esc_attr( $labels_color ); ?>;
	<?php endif; ?>

	<?php if ( $labels_margin ) : ?>
		margin-bottom: <?php echo esc_attr( $labels_margin ); ?>px;
	<?php endif; ?>

	<?php if ( $labels_font_size ) : ?>
		font-size: <?php echo esc_attr( $labels_font_size ); ?>px;
	<?php endif; ?>
}

#login {
	<?php if ( $form_width ) : ?>
		width: <?php echo esc_attr( $form_width ); ?>px;
	<?php endif; ?>
	<?php if ( $templates != 'default') : ?>
		background-color: <?php echo esc_attr( $form_bg_color ? $form_bg_color : '#ffffff' ); ?>; 
		display: flex; 
		flex-direction: column; 
		justify-content: center;
		height: 100%; 
		padding: unset; 
	<?php endif; ?>
	<?php if ( $templates == 'left-form') : ?>
		margin-left: 0;
		margin-right: auto;
		border-right-width: <?php echo esc_attr( $form_border ); ?>px;
		border-right-color: <?php echo esc_attr( $form_border_color ); ?>;
	<?php endif; ?>
	<?php if ( $templates == 'right-form') : ?>
		margin-left: auto;
		margin-right: 0;
		border-left-width: <?php echo esc_attr( $form_border ); ?>px;
		border-left-color: <?php echo esc_attr( $form_border_color ); ?>;
	<?php endif; ?>
}

.login form,
#loginform {
	box-shadow: none;
	<?php if ( $templates != 'default') : ?>
		border-width: 0;
	<?php elseif ( $form_border ) : ?>
		border-width: <?php echo esc_attr( $form_border ); ?>px;
	<?php endif; ?>
	
	<?php if ( $form_border_color ) : ?>
		border-color: <?php echo esc_attr( $form_border_color ); ?>;
	<?php endif; ?>
	
	<?php if ( $form_border_radius ) : ?>
		border-radius: <?php echo esc_attr( $form_border_radius ); ?>px;
	<?php endif; ?>

	<?php if ( $form_bg_color ) : ?>
		background-color: <?php echo esc_attr( $form_bg_color ); ?>;
	<?php endif; ?>

	<?php if ( $form_padding ) : ?>
		padding: <?php if ( $templates != 'default') : ?>24px<?php endif; ?> <?php echo esc_attr( $form_padding ); ?>px;
	<?php endif; ?>

	<?php if ( $form_margin ) : ?>
		margin-top: <?php echo esc_attr( $form_margin ); ?>px;

		<?php if ( $templates != 'default') : ?>
			margin-bottom: <?php echo esc_attr( $form_margin ); ?>px;
		<?php endif; ?>
	<?php endif; ?>
	
}

<?php if ( $templates != 'default') : ?>
	@media screen and (max-width: 650px) {
		.login form,
		#loginform {
			padding: 24px;
			margin-top: 0;
			margin-bottom: 0;
		}
	}
<?php endif; ?>

.login .input,
.login input[type=text],
.login input[type=password] {
	box-shadow: none;
	outline: none;
	transition: all 0.30s ease-in-out;
	
	<?php if ( $fields_border_color ) : ?>
		border-color: <?php echo esc_attr( $fields_border_color ); ?>;
	<?php endif; ?>
	
	<?php if ( $fields_border_radius ) : ?>
		border-radius: <?php echo esc_attr( $fields_border_radius ); ?>px;
	<?php endif; ?>
	
	<?php if ( $fields_border_width ) : ?>
		border-width: <?php echo esc_attr( $fields_border_width ); ?>px;
	<?php endif; ?>

	<?php if ( $fields_padding ) : ?>
		padding: <?php echo esc_attr( $fields_padding ); ?>px;
	<?php endif; ?>
		
	<?php if ( $fields_margin ) : ?>
		margin-bottom: <?php echo esc_attr( $fields_margin ); ?>px;
	<?php endif; ?>
	
	<?php if ( $fields_height ) : ?>
		height: <?php echo esc_attr( $fields_height ); ?>px;
	<?php endif; ?>

	<?php if ( $fields_font_size ) : ?>
		font-size: <?php echo esc_attr( $fields_font_size ); ?>px;
	<?php endif; ?>

	<?php if ( $fields_text_color ) : ?>
		color: <?php echo esc_attr( $fields_text_color ); ?>;
	<?php endif; ?>

	<?php if ( $fields_bg_color ) : ?>
		background-color: <?php echo esc_attr( $fields_bg_color ); ?>;
	<?php endif; ?>
}

.login form input[type=checkbox] {
	<?php if ( $fields_border_color ) : ?>
		border-color: <?php echo esc_attr( $fields_border_color ); ?>;
	<?php endif; ?>

	<?php if ( $fields_bg_color ) : ?>
		background-color: <?php echo esc_attr( $fields_bg_color ); ?>;
	<?php endif; ?>
}

.login .wp-pwd .button.wp-hide-pw {
	<?php if ( $fields_height ) : ?>
		top: <?php echo esc_attr( ($fields_height / 2) ); ?>px;
		transform: translateY(-50%);
		padding: 0;
		border-radius: 50%;
	<?php endif; ?>
	<?php if ( $labels_color ) : ?>
		color: <?php echo esc_attr( $labels_color ); ?>;
	<?php endif; ?>
}

.login #backtoblog,
.login #nav {
	text-align: center;
}

<?php if ( $footer_link_color ) : ?>
	.login #nav a,
	.login #backtoblog a {
		color: <?php echo esc_attr( $footer_link_color ); ?>;
	}
<?php endif; ?>

<?php if ( $footer_link_color_hover ) : ?>
	.login #nav a:hover,
	.login #nav a:focus,
	.login #backtoblog a:hover,
	.login #backtoblog a:focus {
		color: <?php echo esc_attr( $footer_link_color_hover ); ?>;
	}
<?php endif; ?>

.wp-core-ui .button {
	<?php if ( $button_width ) : ?>
		width: <?php echo esc_attr( $button_width ); ?>px;
	<?php endif; ?>
	<?php if ( $button_height ) : ?>
		height: <?php echo esc_attr( $button_height ); ?>px;
	<?php endif; ?>
}

.wp-core-ui .button.button-primary {
	<?php if ( $button_text_color ) : ?>
		color: <?php echo esc_attr( $button_text_color ); ?>;
	<?php endif; ?>
	<?php if ( $button_bg_color ) : ?>
		background-color: <?php echo esc_attr( $button_bg_color ); ?>;
		border-color: <?php echo esc_attr( $button_bg_color ); ?>;
	<?php endif; ?>
	<?php if ( $button_border_radius ) : ?>
		border-radius: <?php echo esc_attr( $button_border_radius ); ?>px;
	<?php endif; ?>
}

.wp-core-ui .button.button-primary:hover,
.wp-core-ui .button.button-primary:focus {
	<?php if ( $button_text_color_hover ) : ?>
		color: <?php echo esc_attr( $button_text_color_hover ); ?>;
	<?php endif; ?>
	<?php if ( $button_bg_color_hover ) : ?>
		background-color: <?php echo esc_attr( $button_bg_color_hover ); ?>;
		border-color: <?php echo esc_attr( $button_bg_color_hover ); ?>;
	<?php endif; ?>
}

<?php if ( $remove_register_lost_pw_link ) : ?>
	.login #nav {
		display: none;
	}
<?php endif; ?>

<?php if ( $remove_back_to_site_link ) : ?>
	.login #backtoblog {
		display: none;
	}
<?php endif; ?>

<?php if ( $remove_lang_switcher ) : ?>
	#login .language-switcher {
		display: none;
	}
<?php endif; ?>
</style>