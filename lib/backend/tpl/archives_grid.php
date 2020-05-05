<div class="sv_setting_subpage">
	<h2><?php _e('Grid', 'sv100'); ?></h2>
	<h3 class="divider"><?php _e( 'Grid - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'font_family_title_grid' )->form();
		echo $module->get_setting( 'font_size_title_grid' )->form();
		echo $module->get_setting( 'text_color_title_grid' )->form();
		echo $module->get_setting( 'line_height_title_grid' )->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Grid - Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'font_family_excerpt_grid' )->form();
		echo $module->get_setting( 'font_size_excerpt_grid' )->form();
		echo $module->get_setting( 'text_color_excerpt_grid' )->form();
		echo $module->get_setting( 'line_height_excerpt_grid' )->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Grid - Colors', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'highlight_color_grid' )->form();
		echo $module->get_setting( 'text_color_info_grid' )->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'bg_color_grid' )->form();
		echo $module->get_setting( 'text_color_category_grid' )->form();
		echo $module->get_setting( 'bg_color_category_grid' )->form();
		?>
	</div>
</div>