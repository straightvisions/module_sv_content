<div class="sv_setting_subpage">
	<h2><?php _e('Masonry', 'sv100'); ?></h2>
	<h3 class="divider"><?php _e( 'Masonry - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'font_family_title_masonry' )->run_type()->form();
		echo $module->get_settings_component( 'font_size_title_masonry' )->run_type()->form();
		echo $module->get_settings_component( 'text_color_title_masonry' )->run_type()->form();
		echo $module->get_settings_component( 'line_height_title_masonry' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Masonry - Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'font_family_excerpt_masonry' )->run_type()->form();
		echo $module->get_settings_component( 'font_size_excerpt_masonry' )->run_type()->form();
		echo $module->get_settings_component( 'text_color_excerpt_masonry' )->run_type()->form();
		echo $module->get_settings_component( 'line_height_excerpt_masonry' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Masonry - Read more', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'font_family_more_masonry' )->run_type()->form();
		echo $module->get_settings_component( 'font_size_more_masonry' )->run_type()->form();
		echo $module->get_settings_component( 'text_color_more_masonry' )->run_type()->form();
		echo $module->get_settings_component( 'line_height_more_masonry' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Masonry - Colors', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'highlight_color_masonry' )->run_type()->form();
		echo $module->get_setting( 'text_color_info_masonry' )->run_type()->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_settings_component( 'bg_color_masonry' )->run_type()->form();
		echo $module->get_setting( 'text_color_category_masonry' )->run_type()->form();
		echo $module->get_setting( 'bg_color_category_masonry' )->run_type()->form();
		?>
	</div>
</div>