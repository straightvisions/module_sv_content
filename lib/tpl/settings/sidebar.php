<?php if ( current_user_can( 'activate_plugins' ) ) { ?>
	<div class="sv_setting_subpage">
		<h2><?php _e('Sidebar', 'sv100'); ?></h2>
		<p><?php _e( 'You can override this within each post or page.', 'sv100' ); ?></p>
		<div class="sv_setting_flex"><?php echo $module->get_setting( 'stack_active' )->form(); ?></div>
		<?php foreach(get_post_types(array('public' => true)) as $post_type){ ?>
			<h3><?php echo __('Post Type: ','sv100').' '.$post_type; ?></h3>
			<div class="sv_setting_flex">
				<?php
					foreach ($module->get_sidebar_positions() as $position => $position_label) {
						echo $module->get_setting('sidebar_'.$position.'_'.$post_type)->form();
					}
				?>
			</div>
		<?php } ?>
	</div>
<?php }