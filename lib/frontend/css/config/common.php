<?php
	/* css namespace */
	$namespace = 'sv100_sv_content';

	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper:before' : '.sv100_sv_content_wrapper:before',
		array_merge(
			$script->get_parent()->get_setting('bg_color')->get_css_data('background-color'),
			$script->get_parent()->get_setting('border')->get_css_data()
		)
	);

	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper > article' : '.sv100_sv_content_wrapper > .sv100_sv_content_wrapper_inner',
		array_merge(
			$script->get_parent()->get_setting('padding')->get_css_data('padding'),
			$script->get_parent()->get_setting('margin')->get_css_data(),
			$script->get_parent()->get_setting('border')->get_css_data()
		)
	);


	/* creating globals for other modules to inherit */
	$settings_raw = $script->get_parent()->get_setting('padding')->get_data();
	$css = '';
	foreach($settings_raw as $breakpoint_key => $responsive_data_array){
		$key = str_replace('_', '-', $breakpoint_key);
		foreach($responsive_data_array as $property_key => $value){
			$css .= '--'.$namespace.'-padding-'.$key.'-'.$property_key.': '.(string)$value.';';
		}
	}

	echo ':root{'.$css.'}';

	/* max width behaviour for alignfull elements in root */
	$properties			= array(
		'width'			=>array(),
		'margin-left'	=>array(),
		'margin-right'	=>array(),
		'padding-left'	=>array(),
		'padding-right'	=>array(),
	);

	foreach($settings_raw as $breakpoint_key => $responsive_data_array){
		$key = str_replace('_', '-', $breakpoint_key);
		$properties['width'][$breakpoint_key]			= 'calc( 100% + var( --sv100_sv_content-padding-'.$key.'-left ) + var( --sv100_sv_content-padding-'.$key.'-right ) )';
		$properties['margin-left'][$breakpoint_key]		= 'calc( -1 *  var( --sv100_sv_content-padding-'.$key.'-left ) )';
		$properties['padding-left'][$breakpoint_key]	= 'var( --sv100_sv_content-padding-'.$key.'-left )';
		$properties['padding-right'][$breakpoint_key]	= 'var( --sv100_sv_content-padding-'.$key.'-right )';
	}

	$class_list = array(
		'backend' => array(
			'.editor-styles-wrapper > article > .alignfull',
		),
		'frontend' => array(
			'.sv100_sv_content_wrapper > .sv100_sv_content_wrapper_inner > .alignfull',
			// '.sv100_sv_content_wrapper > .sv100_sv_content_wrapper_inner > .sv_content_skip_padding > .alignfull',
			/* @todo add support for skipping the parent block (helpful with layout helper blocks like columns manager
			 * to keep larger content padding over all breakpoints
			 */
		)
	);

	echo $_s->build_css(
		is_admin() ? implode(',', $class_list['backend']) : implode(',', $class_list['frontend']),
		$properties
	);

