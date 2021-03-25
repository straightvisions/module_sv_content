<?php
	// Stores the child module, to shorten method calls
	$module = $script->get_parent()->get_child_module( 'archive' );

	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper > article' : '.sv100_sv_content_archive_wrapper > .sv100_sv_content_archive_wrapper_inner',
		array_merge(
			$module->get_setting('padding')->get_css_data('padding'),
			$module->get_setting('margin')->get_css_data()
		)
	);

	// Loads config scripts for archives
	require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/archive_styles/list.php' ) );
	require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/archive_styles/masonry.php' ) );
	require_once( $script->get_parent()->get_path( 'lib/frontend/css/config/archive_styles/grid.php' ) );
