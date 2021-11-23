<?php
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper:before' : '.sv100_sv_content_wrapper',
		$module->get_setting('bg_color')->get_css_data('background-color')
	);

	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper > article' : '.sv100_sv_content_wrapper > .sv100_sv_content_wrapper_inner, .sv100_sv_content_archive_header .sv100_sv_content_archive_header_content ',
		array_merge(
			$module->get_setting('padding')->get_css_data('padding'),
			$module->get_setting('margin')->get_css_data(),
			$module->get_setting('border')->get_css_data()
		)
	);
	
	$properties = array();
	$properties['width']	= $_s->prepare_css_property(($module->get_setting('spacing')->get_data('width') * 2),'calc(100% - ','px)');

	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper > article > *:not(.alignfull)' : '.sv100_sv_content_wrapper_inner > *:not(.alignfull)',
		array_merge(
			$properties
		)
	);

	// maybe stack
	$stack_active					= $module->get_setting('stack_active');
	$properties						= array();

	// column or row
	$stack							= array_map(function ($val) { return $val ? 'column' : 'row'; }, $stack_active->get_data());
	$properties['flex-direction']	= $stack_active->prepare_css_property_responsive($stack,'','');

	echo $_s->build_css(
		'.sv100_sv_content_wrapper',
		$properties
	);

	$column_spacing					= intval($module->get_setting( 'spacing' )->get_data());
	$properties						= array();

	// max width
	$stack							= array_map(function ($val) use($column_spacing) { return $val ? 'calc(100%)' : 'calc(70% - '.$column_spacing.'px)'; }, $stack_active->get_data());
	$properties['flex-basis']		= $stack_active->prepare_css_property_responsive($stack,'','');

	echo $_s->build_css(
		'.sv100_sv_content_wrapper > article',
		$properties
	);

	// Sidebar
	// column or row
	$properties						= array();

	$stack							= array_map(function ($val) use($column_spacing) { return $val ? '0 '.$column_spacing.'px' : '0 '.$column_spacing.'px 0 0'; }, $stack_active->get_data());
	$properties['padding']			= $stack_active->prepare_css_property_responsive($stack,'','');

	$stack							= array_map(function ($val) use($column_spacing) { return $val ? '0' : $column_spacing.'px'; }, $stack_active->get_data());
	$properties['margin-left']		= $stack_active->prepare_css_property_responsive($stack,'','');

	echo $_s->build_css(
		'.sv100_sv_content_sidebar_right',
		$properties
	);