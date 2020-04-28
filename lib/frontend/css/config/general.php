<?php
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper:before' : '.sv100_sv_content_wrapper:before',
		array_merge(
			$script->get_parent()->get_setting('bg_color')->get_css_data('background-color'),
			$script->get_parent()->get_setting('border')->get_css_data()
		)
	);

	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper > article' : '.sv100_sv_content_wrapper > article',
		array_merge(
			$script->get_parent()->get_setting('padding')->get_css_data('padding'),
			$script->get_parent()->get_setting('margin')->get_css_data(),
			$script->get_parent()->get_setting('border')->get_css_data()
		)
	);