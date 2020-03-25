<div class="sv_setting_subpage">
	<h2><?php _e('List', 'sv100'); ?></h2>
	<h3 class="divider"><?php _e( 'List - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'font_family_title_list' )->form();
		echo $module->get_setting( 'font_size_title_list' )->form();
		echo $module->get_setting( 'text_color_title_list' )->form();
		echo $module->get_setting( 'line_height_title_list' )->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'List - Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'font_family_excerpt_list' )->form();
		echo $module->get_setting( 'font_size_excerpt_list' )->form();
		echo $module->get_setting( 'text_color_excerpt_list' )->form();
		echo $module->get_setting( 'line_height_excerpt_list' )->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'List - Read more', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'font_family_more_list' )->form();
		echo $module->get_setting( 'font_size_more_list' )->form();
		echo $module->get_setting( 'text_color_more_list' )->form();
		echo $module->get_setting( 'line_height_more_list' )->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'List - Colors', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'highlight_color_list' )->form();
		echo $module->get_setting( 'text_color_info_list' )->form();
		?>
	</div>
</div>