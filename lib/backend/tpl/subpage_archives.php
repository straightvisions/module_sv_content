<div class="sv_setting_subpage">
	<h2><?php _e('Archives', 'sv100'); ?></h2>
	<h3 class="divider"><?php _e( 'Display styles', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'home_theme' )->run_type()->form();
			echo $module->get_setting( 'search_theme' )->run_type()->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'category_theme' )->run_type()->form();
			echo $module->get_setting( 'tag_theme' )->run_type()->form();
			echo $module->get_setting( 'author_theme' )->run_type()->form();
		?>
	</div>
	
	<?php // ##### LIST ##### ?>
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
	
	<?php // ##### MASONRY ##### ?>
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
	
	<?php // ##### GRID ##### ?>
	<h3 class="divider"><?php _e( 'Grid - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_title_grid' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_title_grid' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_title_grid' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_title_grid' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Grid - Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_excerpt_grid' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_excerpt_grid' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_excerpt_grid' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_excerpt_grid' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Grid - Colors', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'highlight_color_grid' )->run_type()->form();
			echo $module->get_setting( 'text_color_info_grid' )->run_type()->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'bg_color_grid' )->run_type()->form();
			echo $module->get_setting( 'text_color_category_grid' )->run_type()->form();
			echo $module->get_setting( 'bg_color_category_grid' )->run_type()->form();
		?>
	</div>
</div>