<?php
	// Stores the child module, to shorten method calls
	$module = $script->get_parent()->get_child_module( 'archive' );

    // Loads config scripts for archives
    require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/archive_styles/list.php' ) );
    require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/archive_styles/masonry.php' ) );
    require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/archive_styles/grid.php' ) );
?>