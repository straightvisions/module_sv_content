<div class="sv_setting_subpage">
	<h2><?php _e('Content Header', 'sv100'); ?></h2>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'content_header_wrapper_max_width' )->form();
		echo $module->get_setting( 'content_header_max_width' )->form();
		echo $module->get_setting( 'content_header_align' )->form();
		?>
	</div>
	<h3 class="divider"><?php _e( 'Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'font_family_title' )->form();
			echo $module->get_setting( 'font_size_title' )->form();
			echo $module->get_setting( 'text_color_title' )->form();
			echo $module->get_setting( 'line_height_title' )->form();
		?>
	</div>
    <div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'text_align_title' )->form();
		echo $module->get_setting( 'block_align_title' )->form();
		?>
    </div>

	<h3 class="divider"><?php _e( 'Title (Mobile)', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'font_size_title_mobile' )->form();
			echo $module->get_setting( 'line_height_title_mobile' )->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'font_family_excerpt' )->form();
			echo $module->get_setting( 'font_size_excerpt' )->form();
			echo $module->get_setting( 'text_color_excerpt' )->form();
			echo $module->get_setting( 'line_height_excerpt' )->form();
		?>
	</div>
    <div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'text_align_excerpt' )->form();
		echo $module->get_setting( 'block_align_excerpt' )->form();
		?>
    </div>

	<h3 class="divider"><?php _e( 'Excerpt (Mobile)', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'font_size_excerpt_mobile' )->form();
			echo $module->get_setting( 'line_height_excerpt_mobile' )->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Colors', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'bg_color' )->form();
			echo $module->get_setting( 'text_color_info' )->form();
		?>
	</div>

    <h3 class="divider"><?php _e( 'Image Overlay Settings', 'sv100' ); ?></h3>
    <div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'image_overlay_color' )->form();
			echo $module->get_setting( 'header_content_overlay_color' )->form();
		?>
	</div>
</div>