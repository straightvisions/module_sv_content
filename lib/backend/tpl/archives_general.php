<div class="sv_setting_subpage">
	<h2><?php _e('General', 'sv100'); ?></h2>
	<h3 class="divider"><?php _e( 'Display styles', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'home_theme' )->form();
		echo $module->get_setting( 'search_theme' )->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'category_theme' )->form();
		echo $module->get_setting( 'tag_theme' )->form();
		echo $module->get_setting( 'author_theme' )->form();
		?>
	</div>
    <div class="sv_setting_flex">
		<?php
		echo $module->get_setting( 'margin' )->form();
		echo $module->get_setting( 'padding' )->form();
		?>
    </div>
</div>