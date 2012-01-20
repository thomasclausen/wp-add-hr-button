<?php
/*
Plugin Name: Horizontal rule button
Description: Add horizontal rule button to TinyMCE.
Version: 0.1
License: GPLv2
Author: Thomas Clausen
Author URI: http://www.thomasclausen.dk/wordpress/
*/

// Add horizontal rule button to TinyMCE
function add_hr_button( $mce_buttons ) {
	$pos = array_search( 'charmap', $mce_buttons, true );
	if ( $pos !== false ) {
		$tmp_buttons = array_slice( $mce_buttons, 0, $pos+1 );
		$tmp_buttons[] = 'separator';
		$tmp_buttons[] = 'hr';
		$mce_buttons = array_merge( $tmp_buttons, array_slice( $mce_buttons, $pos+1 ) );
	}
	//$mce_buttons[] = 'hr';
	return $mce_buttons;
}
add_filter( 'mce_buttons_2', 'add_hr_button' ); ?>