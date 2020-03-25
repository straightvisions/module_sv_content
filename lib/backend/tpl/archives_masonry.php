<div class="sv_setting_subpage">
	<h2><?php _e('Masonry', 'sv100'); ?></h2>
	<h3 class="divider"><?php _e( 'Masonry - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'font_family_title_masonry' )->form();
		echo $module->get_setting( 'font_size_title_masonry' )->form();
		echo $module->get_setting( 'text_color_title_masonry' )->form();
		echo $module->get_setting( 'line_height_title_masonry' )->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Masonry - Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'font_family_excerpt_masonry' )->form();
		echo $module->get_setting( 'font_size_excerpt_masonry' )->form();
		echo $module->get_setting( 'text_color_excerpt_masonry' )->form();
		echo $module->get_setting( 'line_height_excerpt_masonry' )->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Masonry - Read more', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'font_family_more_masonry' )->form();
		echo $module->get_setting( 'font_size_more_masonry' )->form();
		echo $module->get_setting( 'text_color_more_masonry' )->form();
		echo $module->get_setting( 'line_height_more_masonry' )->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Masonry - Colors', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'highlight_color_masonry' )->form();
		echo $module->get_setting( 'text_color_info_masonry' )->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'bg_color_masonry' )->form();
		echo $module->get_setting( 'text_color_category_masonry' )->form();
		echo $module->get_setting( 'bg_color_category_masonry' )->form();
		?>
	</div>
</div>