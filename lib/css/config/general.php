<?php
	/* css namespace */
	$namespace = 'sv100_sv_content';

	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper:before' : '.sv100_sv_content_wrapper',
		array_merge(
			$module->get_setting('bg_color')->get_css_data('background-color'),
			$module->get_setting('border')->get_css_data()
		)
	);

	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper > article' : '.sv100_sv_content_wrapper > .sv100_sv_content_wrapper_inner, .sv100_sv_content_archive_header .sv100_sv_content_archive_header_content ',
		array_merge(
			$module->get_setting('padding')->get_css_data('padding'),
			$module->get_setting('margin')->get_css_data(),
			$module->get_setting('border')->get_css_data()
		)
	);
	
	$properties = $module->get_setting('spacing')->get_css_data('width');
	
	foreach($properties['width'] as $breakpoint => $value){
		$properties['width'][$breakpoint] = 'calc(100% - '.$value.')';
	}
	
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper > article > *:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide)' : '.sv100_sv_content_wrapper_inner > *:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide)',
		array_merge(
			$properties
		)
	);