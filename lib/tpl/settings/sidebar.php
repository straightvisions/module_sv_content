<?php if ( current_user_can( 'activate_plugins' ) ) { ?>
	<div class="sv_setting_subpage">
		<h2><?php _e('Sidebar', 'sv100'); ?></h2>
		<p><?php _e( 'You can override this within each post or page.', 'sv100' ); ?></p>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'stack_active' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'show_sidebar_right_post' )->form();
				echo $module->get_setting( 'show_sidebar_bottom_post' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'show_sidebar_right_page' )->form();
				echo $module->get_setting( 'show_sidebar_bottom_page' )->form();
			?>
		</div>
	</div>
<?php } ?>