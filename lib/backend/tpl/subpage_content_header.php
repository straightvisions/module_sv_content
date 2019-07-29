<div class="sv_setting_subpage">
	<h2><?php _e('Content Header', 'sv100'); ?></h2>
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
	
	<h3 class="divider"><?php _e( 'Colors (with Thumbnail)', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'text_color_title_image' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_excerpt_image' )->run_type()->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'bg_color_image' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_info_image' )->run_type()->form();
		?>
	</div>
</div>