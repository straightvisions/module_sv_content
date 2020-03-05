<div class="sv_setting_subpage">
	<h2><?php _e('Grid', 'sv100'); ?></h2>
	<h3 class="divider"><?php _e( 'Grid - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'font_family_title_grid' )->form();
		echo $module->get_settings_component( 'font_size_title_grid' )->form();
		echo $module->get_settings_component( 'text_color_title_grid' )->form();
		echo $module->get_settings_component( 'line_height_title_grid' )->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Grid - Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'font_family_excerpt_grid' )->form();
		echo $module->get_settings_component( 'font_size_excerpt_grid' )->form();
		echo $module->get_settings_component( 'text_color_excerpt_grid' )->form();
		echo $module->get_settings_component( 'line_height_excerpt_grid' )->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Grid - Colors', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'highlight_color_grid' )->form();
		echo $module->get_setting( 'text_color_info_grid' )->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'bg_color_grid' )->form();
		echo $module->get_setting( 'text_color_category_grid' )->form();
		echo $module->get_setting( 'bg_color_category_grid' )->form();
		?>
	</div>
</div>