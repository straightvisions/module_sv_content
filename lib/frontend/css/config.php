<?php
	// ##### SETTINGS #####

	// Fetches all settings and creates new variables with the setting ID as name and setting data as value.
	// This reduces the lines of code for the needed setting values.
	foreach ( $script->get_parent()->get_settings() as $setting ) {
		if ( $setting->get_type() !== false ) {
			${ $setting->get_ID() } = $setting->get_data();
		
			// If setting is color, it gets the value in the RGB-Format
			if ( $setting->get_type() === 'setting_color' ) {
				${ $setting->get_ID() } = $setting->get_rgb( ${ $setting->get_ID() } );
			}
		}
	}

	// ##### SCRIPTS #####

	// Loads general config scripts
	require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/highlight_color.php' ) );

	// Loads config scripts for archives
	if( is_archive() || ( is_front_page() && is_home() ) ) {
		require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/archive.php' ) );
	} 
	
	// Loads config scripts for posts
	else {
		require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/text_color.php' ) );
		require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/header.php' ) );
		require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/header_content.php' ) );
		require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/sidebar.php' ) );
		require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/gutenberg_headings.php' ) );
	}
?>