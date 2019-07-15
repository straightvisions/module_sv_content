<?php
	if ( current_user_can( 'activate_plugins' ) ) {
	?>
	<div class="sv_section_description"><?php echo $module->get_section_desc(); ?></div>
		<h2><?php _e( 'Heading Settings', 'sv100' ); ?></h2>
		
		<h3 class="divider">H1</h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_settings_component( 'h1_font_family' )->run_type()->form();
				echo $module->get_settings_component( 'h1_font_size' )->run_type()->form();
				echo $module->get_settings_component( 'h1_text_color' )->run_type()->form();
				echo $module->get_settings_component( 'h1_line_height' )->run_type()->form();
			?>
		</div>

		<h3 class="divider">H2</h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_settings_component( 'h2_font_family' )->run_type()->form();
				echo $module->get_settings_component( 'h2_font_size' )->run_type()->form();
				echo $module->get_settings_component( 'h2_text_color' )->run_type()->form();
				echo $module->get_settings_component( 'h2_line_height' )->run_type()->form();
			?>
		</div>

		<h3 class="divider">H3</h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_settings_component( 'h3_font_family' )->run_type()->form();
				echo $module->get_settings_component( 'h3_font_size' )->run_type()->form();
				echo $module->get_settings_component( 'h3_text_color' )->run_type()->form();
				echo $module->get_settings_component( 'h3_line_height' )->run_type()->form();
			?>
		</div>

		<h3 class="divider">H4</h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_settings_component( 'h4_font_family' )->run_type()->form();
				echo $module->get_settings_component( 'h4_font_size' )->run_type()->form();
				echo $module->get_settings_component( 'h4_text_color' )->run_type()->form();
				echo $module->get_settings_component( 'h4_line_height' )->run_type()->form();
			?>
		</div>

		<h3 class="divider">H5</h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_settings_component( 'h5_font_family' )->run_type()->form();
				echo $module->get_settings_component( 'h5_font_size' )->run_type()->form();
				echo $module->get_settings_component( 'h5_text_color' )->run_type()->form();
				echo $module->get_settings_component( 'h5_line_height' )->run_type()->form();
			?>
		</div>

		<h3 class="divider">H6</h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_settings_component( 'h6_font_family' )->run_type()->form();
				echo $module->get_settings_component( 'h6_font_size' )->run_type()->form();
				echo $module->get_settings_component( 'h6_text_color' )->run_type()->form();
				echo $module->get_settings_component( 'h6_line_height' )->run_type()->form();
			?>
		</div>
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

	<h3 class="divider"><?php _e( 'Color Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings()['color_highlight']->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Post listing themes', 'sv100' ); ?></h3>
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

    <h3 class="divider"><?php _e( '404 Page', 'sv100' ); ?></h3>
    <div class="sv_setting_flex">
        <?php
        echo $module->get_settings()['404_page']->run_type()->form();
        ?>
    </div>
	<?php
	}
?>