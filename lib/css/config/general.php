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

	foreach(get_post_types(array('public' => true)) as $post_type){
		echo $_s->build_css(
			'.single-'.$post_type.' .sv100_sv_content_wrapper',
			array_merge(
			$module->get_setting('outer_wrapper_max_width_'.$post_type)->get_css_data('max-width'),
			$module->get_setting('column_gap_'.$post_type)->get_css_data('column-gap','','px')
			)
		);
		echo $_s->build_css(
			'.single-'.$post_type.' .sv100_sv_content_wrapper_inner',
			$module->get_setting('article_wrapper_max_width_'.$post_type)->get_css_data('max-width')
		);

		foreach ($module->get_sidebar_positions() as $position => $position_label) {
			echo $_s->build_css(
				'.single-'.$post_type.' .sv100_sv_content_wrapper > aside.sv100_sv_content_sidebar_'.$position,
				$module->get_setting('sidebar_max_width_'.$position.'_'.$post_type)->get_css_data('width')
			);
		}
	}