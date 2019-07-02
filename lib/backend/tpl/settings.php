<?php
	if ( current_user_can( 'activate_plugins' ) ) {
	?>
	<div class="sv_section_description"><?php echo $module->get_section_desc(); ?></div>

	<?php if ( has_filter( 'sv100_post_header_slider' ) ) { ?>
        <h3 class="divider"><?php _e( 'Home Slider', 'sv100' ); ?></h3>
        <div class="sv_setting_flex">
            <?php
            echo $module->get_settings()['home_slider']->run_type()->form();
            echo $module->get_settings()['home_slider_transition']->run_type()->form();
            echo $module->get_settings()['home_slider_max']->run_type()->form();
            ?>
        </div>
    <?php }?>

	<h3 class="divider"><?php _e( 'Post listing themes', 'sv100' ); ?></h3>
	<div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_settings()['home_theme']->run_type()->form();
				echo $module->get_settings()['search_theme']->run_type()->form();
			?>
		</div>
        <div class="sv_setting_flex">
			<?php
			echo $module->get_settings()['category_theme']->run_type()->form();
			echo $module->get_settings()['tag_theme']->run_type()->form();
			echo $module->get_settings()['author_theme']->run_type()->form();
			?>
        </div>
	</div>

    <h3 class="divider"><?php _e( '404 Page', 'sv100' ); ?></h3>
    <div class="sv_setting_flex">
        <?php
        echo $module->get_settings()['404_page']->run_type()->form();
        ?>
    </div>
	<?php
	}
?>