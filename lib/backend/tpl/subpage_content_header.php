<div class="sv_setting_subpage">
	<h2><?php _e('Content Header', 'sv100'); ?></h2>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'content_header_wrapper_max_width' )->run_type()->form();
		echo $module->get_setting( 'content_header_max_width' )->run_type()->form();
		echo $module->get_setting( 'content_header_align' )->run_type()->form();
		?>
	</div>
	<h3 class="divider"><?php _e( 'Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_title' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_title' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_title' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_title' )->run_type()->form();
		?>
	</div>
    <div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'text_align_title' )->run_type()->form();
		echo $module->get_setting( 'block_align_title' )->run_type()->form();
		?>
    </div>

	<h3 class="divider"><?php _e( 'Title (Mobile)', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_size_title_mobile' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_title_mobile' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_excerpt' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_excerpt' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_excerpt' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_excerpt' )->run_type()->form();
		?>
	</div>
    <div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'text_align_excerpt' )->run_type()->form();
		echo $module->get_setting( 'block_align_excerpt' )->run_type()->form();
		?>
    </div>

	<h3 class="divider"><?php _e( 'Excerpt (Mobile)', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_size_excerpt_mobile' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_excerpt_mobile' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Colors', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'bg_color' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_info' )->run_type()->form();
		?>
	</div>

    <h3 class="divider"><?php _e( 'Image Overlay Settings', 'sv100' ); ?></h3>
    <div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'image_overlay_color' )->run_type()->form();
			echo $module->get_setting( 'image_overlay_opacity' )->run_type()->form();
		?>
    </div>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'header_content_overlay_color' )->run_type()->form();
		echo $module->get_setting( 'header_content_overlay_opacity' )->run_type()->form();
		?>
	</div>
</div>