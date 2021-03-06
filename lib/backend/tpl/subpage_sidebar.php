<div class="sv_setting_subpage">
	<h2><?php _e( 'Sidebar', 'sv100' ); ?></h2>
	
	<p><?php _e( 'You can override this within each post or page.', 'sv100' ); ?></p>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'show_sidebar_right_post' )->form();
			echo $module->get_setting( 'sidebar_right_post_sticky' )->form();
			echo $module->get_setting( 'show_sidebar_bottom_post' )->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'show_sidebar_right_page' )->form();
			echo $module->get_setting( 'sidebar_right_page_sticky' )->form();
			echo $module->get_setting( 'show_sidebar_bottom_page' )->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Widget - Title', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'font_family_widget_title' )->form();
			echo $module->get_setting( 'font_size_widget_title' )->form();
			echo $module->get_setting( 'text_color_widget_title' )->form();
			echo $module->get_setting( 'line_height_widget_title' )->form();
		?>
	</div>
	
	<h3 class="divider"><?php _e( 'Widget - Colors', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'text_color_widget' )->form();
			echo $module->get_setting( 'bg_color_widget' )->form();
		?>
	</div>
    
    <?php
    // Sidebars - Alignment Settings
    
    if ( $count = count( $module->get_module( 'sv_sidebar' )->get_sidebars( $module ) ) > 0 ) {
        $i = 0;
        
        echo '<h3 class="divider">' . __( 'Sidebar Alignments', 'sv100' ) . '</h3>';
        
		foreach ( $module->get_module( 'sv_sidebar' )->get_sidebars( $module ) as $sidebar ) {
		    echo $i === 0 ? '<div class="sv_setting_flex">' : '';
		    
			echo $module->get_setting( $sidebar['id'] )->form();
			
			$i++;
			
			if ( $i === 3 || $i === $count ) {
				$i = 0;
				
			    echo '</div>';
            }
		}
    }
	?>
</div>