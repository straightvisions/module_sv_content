<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'home' ); ?>">
	<?php
	if ( $this->s['home_slider']->run_type()->get_data() && isset( $this->get_root()->sv_posts ) && isset( $this->get_root()->sv_slick ) ) {
		$max 	= $this->s['home_slider_max']->run_type()->get_data() ? $this->s['home_slider_max']->run_type()->get_data() : 5;
		$theme 	= $this->s['home_slider_transition']->run_type()->get_data() ?  $this->s['home_slider_transition']->run_type()->get_data() : 'fade';
		
		echo do_shortcode( '[sv_posts slider="1" slider_theme="' . $theme . '" image="1" show_image="1" show_category="0" show_excerpt="1" show_date="0" max_length="80"]' );
	}
	?>
	<div class="<?php echo $this->get_prefix( 'header' ); ?>">
		<h1><?php _e( 'Recent Posts', $this->get_module_name() ); ?></h1>
	</div>
	
	<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
		<?php
			$archive_theme = 'lib/frontend/tpl/archive/themes/';
			$archive_theme .= $this->s['home_theme']->run_type()->get_data()
				? $this->s['home_theme']->run_type()->get_data()
				: 'list';
			$archive_theme .= '.php';
			
			include( $this->get_path( $archive_theme ) );
		?>
	</div>
</div>