<?php 
defined( 'ABSPATH' ) || die( "Can't access directly" ); 

if ( !is_customize_preview() ) {
	wp_safe_redirect( is_multisite() ? network_home_url() : home_url() );
}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
		$login_title = sprintf(
			/* translators: %1$s: login title, %2$s: site name */
			__( '%1$s &lsaquo; %2$s &#8212; WordPress', 'loginify' ),
			__( 'Log In', 'loginify' ),
			get_bloginfo( 'name', 'display' )
		);
		?>
		<title><?php echo esc_html( $login_title ); ?></title>
		<?php
			wp_enqueue_style( 'login' );
			do_action( 'login_enqueue_scripts' );
			do_action( 'login_head' );
		?>
	</head>
	<?php
		do_action( 'login_form_login' );

		$action = 'login';

		$login_link_separator = apply_filters( 'login_link_separator', ' | ' );

		if ( is_multisite() ) {
			$login_header_url   = network_home_url();
			$login_header_title = get_network()->site_name;
		} else {
			$login_header_url   = __( 'https://wordpress.org/', 'loginify' );
			$login_header_title = __( 'Powered by WordPress', 'loginify' );
		}

		$login_header_url = apply_filters( 'login_headerurl', $login_header_url );
		$login_header_title = apply_filters( 'login_headertext', $login_header_title );

		if ( is_multisite() ) {
			$login_header_text = get_bloginfo( 'name', 'display' );
		} else {
			$login_header_text = $login_header_title;
		}

		$classes = array( 'login-action-' . $action, 'wp-core-ui' );
		if ( is_rtl() ) {
			$classes[] = 'rtl';
		}

		$classes = apply_filters( 'login_body_class', $classes, $action );

	?>
	<body class="login <?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<?php do_action( 'login_header' ); ?>
		<div id="login">
			<h1><a href="<?php echo esc_url( $login_header_url ); ?>" title="<?php echo esc_html( $login_header_title ); ?>" tabindex="-1"><?php echo esc_html( $login_header_text ); ?></a></h1>
			<form name="loginform" id="loginform">
				<p>
					<label for="user_login"><?php esc_html_e( 'Username or Email Address', 'loginify' ); ?></label>
					<input type="text" name="log" id="user_login" class="input" value="<?php echo esc_attr( $user_login ); ?>" size="20" autocapitalize="off" />
				</p>
				<p>
					<label for="user_pass"><?php esc_html_e( 'Password', 'loginify' ); ?></label>
					<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
				</p>
				<?php do_action( 'login_form' ); ?>
				<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <label for="rememberme"><?php esc_html_e( 'Remember Me', 'loginify' ); ?></label></p>
				<p class="submit">
					<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="<?php esc_attr_e( 'Log In', 'loginify' ); ?>" />
				</p>
			</form>
			<p id="nav">
				<?php
				if ( get_option( 'users_can_register' ) ) :
					$registration_url = sprintf( '<a href="%s">%s</a>', esc_url( wp_registration_url() ), esc_html(__( 'Register', 'loginify' )) );
					echo esc_html( apply_filters( 'register', $registration_url ) );
					echo esc_html( $login_link_separator );
					endif;
				?>
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'loginify' ); ?></a>
			</p>
			<p id="backtoblog">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
						/* translators: %s: site name */
						printf( esc_html(_x( '&larr; Back to %s', 'site', 'loginify' )), esc_html(get_bloginfo( 'title', 'display' )) );
					?>
				</a>
			</p>
		</div>
		<?php
		if ( version_compare( $GLOBALS['wp_version'], '5.9', '>=' ) ) {
			if (
				apply_filters( 'login_display_language_dropdown', false )
			) {
				$languages = get_available_languages();

				if ( ! empty( $languages ) ) {
					?>
					<div class="language-switcher">
						<form id="language-switcher" action="" method="get">

							<label for="language-switcher-locales">
								<span class="dashicons dashicons-translation" aria-hidden="true"></span>
								<span class="screen-reader-text"><?php esc_html_e( 'Language' ); ?></span>
							</label>

							<?php
							$args = array(
								'id'                          => 'language-switcher-locales',
								'name'                        => 'wp_lang',
								'selected'                    => determine_locale(),
								'show_available_translations' => false,
								'explicit_option_en_us'       => true,
								'languages'                   => $languages,
							);
							
							wp_dropdown_languages( apply_filters( 'login_language_dropdown_args', $args ) );
							?>

							<input type="submit" class="button" value="<?php esc_attr_e( 'Change' ); ?>">
						</form>
					</div>
				<?php } ?>
			<?php } ?>
		<?php } ?>
		<?php
			do_action( 'login_footer' );
			wp_footer();
		?>
	</body>
</html>
