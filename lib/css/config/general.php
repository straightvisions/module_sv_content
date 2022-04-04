<?php
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper:before' : '.sv100_sv_content_wrapper',
		$module->get_setting('bg_color')->get_css_data('background-color')
	);

	// maybe stack
	$stack_active					= $module->get_setting('stack_active');
	$properties						= array();

	// column or row
	$stack							= array_map(function ($val) { return $val ? 'block' : 'grid'; }, $stack_active->get_data());
	$properties['display']			= $stack_active->prepare_css_property_responsive($stack,'','');

	echo $_s->build_css(
		'.sv100_sv_content_wrapper',
		$properties
	);