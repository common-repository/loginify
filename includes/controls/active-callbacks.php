<?php
/**
 * Loginify active callbacks.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


function loginify_templates_callback ($control) {
    if ( $control->manager->get_setting('loginify[templates]')->value() != 'default' ) {
        return false;
    }
    return true;
}

function loginify_background_callback ($control) {
    if ( $control->manager->get_setting('loginify[background_image]')->value() == '' ) {
        return false;
    }
    return true;
}