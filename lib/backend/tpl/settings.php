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
			echo $module->get_settings_component( 'font_size_h6' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_h6' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_h6' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Content Color Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'highlight_color' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Content Header - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_title' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_title' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_title' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_title' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Content Header - Excerpt', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_excerpt' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_excerpt' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_excerpt' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_excerpt' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Content Header - Color Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'bg_color' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_info' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Content Header - Color Settings (with Thumbnail)', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'text_color_title_image' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_excerpt_image' )->run_type()->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'bg_color_image' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_info_image' )->run_type()->form();
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
			echo $module->get_settings_component( 'highlight_color_list' )->run_type()->form();
			echo $module->get_setting( 'text_color_info_list' )->run_type()->form();
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
			echo $module->get_settings_component( 'highlight_color_masonry' )->run_type()->form();
			echo $module->get_setting( 'text_color_info_masonry' )->run_type()->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'bg_color_masonry' )->run_type()->form();
			echo $module->get_setting( 'text_color_category_masonry' )->run_type()->form();
			echo $module->get_setting( 'bg_color_category_masonry' )->run_type()->form();
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
			echo $module->get_settings_component( 'highlight_color_grid' )->run_type()->form();
			echo $module->get_setting( 'text_color_info_grid' )->run_type()->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'bg_color_grid' )->run_type()->form();
			echo $module->get_setting( 'text_color_category_grid' )->run_type()->form();
			echo $module->get_setting( 'bg_color_category_grid' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Widget - Title Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_settings_component( 'font_family_widget_title' )->run_type()->form();
			echo $module->get_settings_component( 'font_size_widget_title' )->run_type()->form();
			echo $module->get_settings_component( 'text_color_widget_title' )->run_type()->form();
			echo $module->get_settings_component( 'line_height_widget_title' )->run_type()->form();
		?>
	</div>

	<h3 class="divider"><?php _e( 'Widget - Color Settings', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'text_color_widget' )->run_type()->form();
			echo $module->get_setting( 'bg_color_widget' )->run_type()->form();
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
	<?php
	}
?>