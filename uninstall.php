<?php
/**
 * Uninstall Loginify
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


if ( !is_multisite() ) {
	delete_option( 'loginify' );
} else {
	$blog_ids = get_sites( array( 'fields' => 'ids' ) );
	
    foreach ( $blog_ids as $blog_id ) {
		switch_to_blog( $blog_id );
		delete_option( 'loginify' );
		restore_current_blog();
	}
}
