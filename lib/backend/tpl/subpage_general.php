<div class="sv_setting_subpage">
	<h2><?php _e('General', 'sv100'); ?></h2>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( '404_page' )->form();
			echo $module->get_setting( 'bg_color' )->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'margin' )->form();
			echo $module->get_setting( 'padding' )->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'border' )->form();
		?>
	</div>
</div>