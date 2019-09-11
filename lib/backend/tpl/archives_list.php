<div class="sv_setting_subpage">
	<h2><?php _e('List', 'sv100'); ?></h2>
	<h3 class="divider"><?php _e( 'List - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'font_family_title_list' )->run_type()->form();
		echo $module->get_settings_component( 'font_size_title_list' )->run_type()->form();
		echo $module->get_settings_component( 'text_color_title_list' )->run_type()->form();
		echo $module->get_settings_component( 'line_height_title_list' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'List - Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'font_family_excerpt_list' )->run_type()->form();
		echo $module->get_settings_component( 'font_size_excerpt_list' )->run_type()->form();
		echo $module->get_settings_component( 'text_color_excerpt_list' )->run_type()->form();
		echo $module->get_settings_component( 'line_height_excerpt_list' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'List - Read more', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'font_family_more_list' )->run_type()->form();
		echo $module->get_settings_component( 'font_size_more_list' )->run_type()->form();
		echo $module->get_settings_component( 'text_color_more_list' )->run_type()->form();
		echo $module->get_settings_component( 'line_height_more_list' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'List - Colors', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'highlight_color_list' )->run_type()->form();
		echo $module->get_setting( 'text_color_info_list' )->run_type()->form();
		?>
	</div>
</div>