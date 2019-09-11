<div class="sv_setting_subpage">
	<h2><?php _e('General', 'sv100'); ?></h2>
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
</div>