<div class="sv_setting_subpage">
	<h2><?php _e('Sidebar', 'sv100'); ?></h2>
	<h3 class="divider"><?php _e( 'Widget - Title Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_widget_title' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_widget_title' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_widget_title' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_widget_title' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Widget - Color Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'text_color_widget' )->run_type()->form();
			echo $module->get_setting( 'bg_color_widget' )->run_type()->form();
		?>
	</div>

</div>