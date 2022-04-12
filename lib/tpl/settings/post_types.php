<?php if ( current_user_can( 'activate_plugins' ) ) { ?>
	<div class="sv_setting_subpage">
		<h2><?php _e('Settings by Post Type', 'sv100'); ?></h2>
		<?php foreach(get_post_types(array('public' => true)) as $post_type){ ?>
			<h3><?php echo __('Post Type: ','sv100').' '.$post_type; ?></h3>
			<div class="sv_setting_flex">
				<?php
					echo $module->get_setting( 'outer_wrapper_max_width_'.$post_type )->form();
					echo $module->get_setting( 'article_wrapper_max_width_'.$post_type )->form();
					echo $module->get_setting( 'column_gap_'.$post_type )->form();
				?>
			</div>
			<div class="sv_setting_flex">
				<?php
					foreach ($module->get_sidebar_positions() as $position => $position_label) {
						echo $module->get_setting('sidebar_max_width_'.$position.'_'.$post_type)->form();
					}
				?>
			</div>
		<?php } ?>
	</div>
<?php }