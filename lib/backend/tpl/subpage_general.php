<div class="sv_setting_subpage">
	<h2><?php _e('General', 'sv100'); ?></h2>
	<h3 class="divider"><?php _e( 'Content Color Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'highlight_color' )->run_type()->form();
		?>
	</div>
	<h3 class="divider"><?php _e( '404 Page', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( '404_page' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Date', 'sv100' ); ?></h3>
	<p><?php _e('You can override this within each Post or Page.', 'sv100'); ?></p>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'show_date_post' )->run_type()->form();
			echo $module->get_setting( 'show_date_page' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Author', 'sv100' ); ?></h3>
	<p><?php _e('You can override this within each Post or Page.', 'sv100'); ?></p>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'show_author_post' )->run_type()->form();
			echo $module->get_setting( 'show_author_page' )->run_type()->form();
		?>
	</div>
</div>