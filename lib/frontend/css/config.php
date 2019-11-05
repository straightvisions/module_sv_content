<?php
	require_once($script->get_parent()->get_path( 'lib/frontend/css/config/highlight_color.php' ));

	if( is_archive() || ( is_front_page() && is_home() ) ) {
		require_once($script->get_parent()->get_path( 'lib/frontend/css/config/archive.php' ));
	} else {
		require_once($script->get_parent()->get_path( 'lib/frontend/css/config/text_color.php' ));
		require_once($script->get_parent()->get_path( 'lib/frontend/css/config/header.php' ));
		require_once($script->get_parent()->get_path( 'lib/frontend/css/config/header_content.php' ));
		require_once($script->get_parent()->get_path( 'lib/frontend/css/config/header_image_overlay_color.php' ));
		require_once($script->get_parent()->get_path( 'lib/frontend/css/config/header_overlay_color.php' ));
		require_once($script->get_parent()->get_path( 'lib/frontend/css/config/sidebar.php' ));
		require_once($script->get_parent()->get_path( 'lib/frontend/css/config/gutenberg_headings.php' ));
	}
?>