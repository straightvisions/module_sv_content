<?php
	// ##### SETTINGS #####

	// Fetches all settings and creates new variables with the setting ID as name and setting data as value.
	// This reduces the lines of code for the needed setting values.
	foreach ( $script->get_parent()->get_settings() as $setting ) {
		if ( $setting->get_type() !== false ) {
			${ $setting->get_ID() } = $setting->get_data();
		}
	}

	// ##### SCRIPTS #####

	require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/common.php' ) );

	// Loads config scripts for archives
	if( is_archive() || is_search() || ( is_front_page() && is_home() ) ) {
		require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/archive.php' ) );
	} 
	
	// Loads config scripts for posts
	else {
		require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/sidebar.php' ) );
	}