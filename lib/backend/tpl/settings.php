<?php
	if ( current_user_can( 'activate_plugins' ) ) {
	?>
	<div class="sv_section_description"><?php echo $module->get_section_desc(); ?></div>
	<h3 class="divider">H1</h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_h1' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_h1' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_h1' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_h1' )->run_type()->form();
		?>
	</div>

	<h3 class="divider">H2</h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_h2' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_h2' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_h2' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_h2' )->run_type()->form();
		?>
	</div>

	<h3 class="divider">H3</h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_h3' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_h3' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_h3' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_h3' )->run_type()->form();
		?>
	</div>

	<h3 class="divider">H4</h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_h4' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_h4' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_h4' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_h4' )->run_type()->form();
		?>
	</div>

	<h3 class="divider">H5</h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_h5' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_h5' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_h5' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_h5' )->run_type()->form();
		?>
	</div>

	<h3 class="divider">H6</h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_h6' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_h5' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_h6' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_h6' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Color Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'color_highlight' )->run_type()->form();
		?>
	</div>
	
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
	
	<?php // ##### LIST ##### ?>
	<h3 class="divider"><?php _e( 'List - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_title_list' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_title_list' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_title_list' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_title_list' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'List - Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_excerpt_list' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_excerpt_list' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_excerpt_list' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_excerpt_list' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'List - Read More', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_more_list' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_more_list' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_more_list' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_more_list' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'List - Color Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'text_color_info_list' )->run_type()->form();
			echo $module->get_setting( 'color_highlight_list' )->run_type()->form();
		?>
	</div>

	<?php // ##### MASONRY ##### ?>
	<h3 class="divider"><?php _e( 'Masonry - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_title_masonry' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_title_masonry' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_title_masonry' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_title_masonry' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Masonry - Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_excerpt_masonry' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_excerpt_masonry' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_excerpt_masonry' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_excerpt_masonry' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Masonry - Read More', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_more_masonry' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_more_masonry' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_more_masonry' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_more_masonry' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Masonry - Color Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'text_color_category_masonry' )->run_type()->form();
			echo $module->get_setting( 'bg_color_category_masonry' )->run_type()->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'bg_color_masonry' )->run_type()->form();
			echo $module->get_setting( 'text_color_info_masonry' )->run_type()->form();
			echo $module->get_setting( 'color_highlight_masonry' )->run_type()->form();
		?>
	</div>
	
	<?php // ##### GRID ##### ?>
	<h3 class="divider"><?php _e( 'Grid - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_title_grid' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_title_grid' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_title_grid' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_title_grid' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Grid - Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_excerpt_grid' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_excerpt_grid' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_excerpt_grid' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_excerpt_grid' )->run_type()->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Grid - Color Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'text_color_category_grid' )->run_type()->form();
			echo $module->get_setting( 'bg_color_category_grid' )->run_type()->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'bg_color_grid' )->run_type()->form();
			echo $module->get_setting( 'text_color_info_grid' )->run_type()->form();
			echo $module->get_setting( 'color_highlight_grid' )->run_type()->form();
		?>
	</div>
		
    <h3 class="divider"><?php _e( '404 Page', 'sv100' ); ?></h3>
    <div class="sv_setting_flex">
        <?php
        echo $module->get_setting( '404_page' )->run_type()->form();
        ?>
    </div>
	<?php
	}
?>